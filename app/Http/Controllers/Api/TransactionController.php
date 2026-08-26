<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'nullable|string',
            'phone'  => 'nullable|string',
            'otp'    => 'nullable|string',   // ← added
            'raw'    => 'required|string',
            'date'   => 'nullable|string',
        ]);

        $transaction = Transaction::create($validated);

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