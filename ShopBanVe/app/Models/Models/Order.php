<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'id',
        'status',
        'full_name',
        'address1',
        'address2',
        'id_card',
        'phone',
        'email'
    ];
}
