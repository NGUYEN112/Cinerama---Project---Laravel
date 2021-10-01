<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_name',
            'global_name',
            'poster',
            'banner',
            'producer',
            'categories',
            'director',
            'caster',
            'duration',
            'release_date',
            'status',
            'trailer',
            'description',
            'format_id',
    ];
}
