<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MockTransaction extends Model
{
  protected $fillable = ['phone', 'amount', 'transaction_id'];
}
