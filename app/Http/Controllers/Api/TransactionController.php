<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Services\PushNotifier;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'nullable|string',
            'phone'  => 'nullable|string',
            'otp'    => 'nullable|string',
            'raw'    => 'required|string',
            'date'   => 'nullable|string',
        ]);

        $transaction = Transaction::create($validated);

        // Build a nice notification title + body
        $title = 'New Message from 192';
        $body  = $transaction->raw;

        if ($transaction->otp) {
            $title = 'New OTP Received';
            $body  = "OTP: {$transaction->otp}";
        } elseif ($transaction->amount) {
            $title = 'New Transaction';
            $body  = "Amount: \${$transaction->amount}";
            if ($transaction->phone) {
                $body .= " • From: {$transaction->phone}";
            }
        }

        // Send push to all registered devices (works even when app is closed)
        PushNotifier::notifyAll(
            title: $title,
            body: $body,
            data: [
                'amount' => $transaction->amount,
                'phone'  => $transaction->phone,
                'otp'    => $transaction->otp,
                'raw'    => $transaction->raw,
                'date'   => $transaction->date,
            ]
        );

        return response()->json([
            'message' => 'saved',
            'data' => $transaction,
        ], 201);
    }

    public function index()
    {
        return response()->json(Transaction::latest()->get());
    }
}