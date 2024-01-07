<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    protected $table= 'statements';
    use HasFactory;
    protected $fillable = [
        'user_id',
        'datetime',
        'amount',
        'transaction_type',
        'details',
        'balance',
    ];
}
