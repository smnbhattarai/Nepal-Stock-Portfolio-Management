<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stock_id',
        'type',
        'quantity',
        'price',
        'date',
        'commission',
    ];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
