<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PushToken;
use Illuminate\Http\Request;

class PushTokenController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'token' => 'required|string',
        ]);

        PushToken::updateOrCreate(
            ['token' => $validated['token']],
            ['token' => $validated['token']]
        );

        return response()->json(['message' => 'token saved'], 201);
    }
}