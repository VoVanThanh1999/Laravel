<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchDetail extends Model
{
    use HasFactory;
    protected $table = 'match_details';
    protected $fillable = [
        'id',
        'A_number_of_empty_seats',
        'A_number_of_seats_purchased',
        'A_price',
        'B_number_of_empty_seats',
        'B_number_of_seats_purchased',
        'B_price',
        'id_match',
    ];
}
