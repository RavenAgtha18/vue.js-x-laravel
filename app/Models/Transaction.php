<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public function transactiondetail()
    {
        return $this->hasOne('App\Models\TransactionDetail', 'transaction_id');
        // return $this->hasOne('App\Models\User', 'member_id');
    }
}
