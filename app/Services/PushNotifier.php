<?php

namespace App\Services;

use App\Models\PushToken;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PushNotifier
{
    public static function notifyAll(string $title, string $body, array $data = []): void
    {
        $tokens = PushToken::pluck('token')->toArray();

        if (empty($tokens)) {
            Log::info('PushNotifier: no tokens registered');
            return;
        }

        $messages = array_map(fn ($token) => [
            'to' => $token,
            'sound' => 'default',
            'title' => $title,
            'body' => $body,
            'data' => $data,
            'priority' => 'high',
            'channelId' => 'sms-alerts',   // same channel you already created
        ], $tokens);

        // Expo accepts up to 100 messages per request
        foreach (array_chunk($messages, 100) as $chunk) {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
                'Accept-Encoding' => 'gzip, deflate',
                'Content-Type' => 'application/json',
            ])->post('https://exp.host/--/api/v2/push/send', $chunk);

            if (!$response->successful()) {
                Log::error('Expo push failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);
            }
        }
    }
}