<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VMatch extends Model
{
    use HasFactory;
    protected $table = 'v_matchs';
    protected $fillable = [
        'id',
        'name',
        'date_start',
        'image',
        'information',
    ];
}
