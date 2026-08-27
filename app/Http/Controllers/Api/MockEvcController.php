<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MockTransaction;
use Illuminate\Http\Request;

class MockEvcController extends Controller
{
    public function balance(Request $request)
    {
        return response()->json([
            'status' => 'success',
            'balance' => '42.50',
            'currency' => 'USD',
        ]);
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $txnId = 'MOCK-' . uniqid();

        MockTransaction::create([
            'phone' => $validated['phone'],
            'amount' => $validated['amount'],
            'transaction_id' => $txnId,
        ]);

        return response()->json([
            'status' => 'success',
            'transaction_id' => $txnId,
            'message' => "Sent \${$validated['amount']} to {$validated['phone']}",
        ]);
    }
}