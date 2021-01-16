<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'products_id',
        'user_id',
        'prise',
        'status',
        'date_orders',
    ];
}
