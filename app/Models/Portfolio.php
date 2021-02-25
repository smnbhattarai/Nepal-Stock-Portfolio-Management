<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'stock_id', 'description'];

    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
