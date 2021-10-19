<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'start_time',
        'film_id',
        'room_id',
        'cinema_id'
    ];

    public function film() {
        return $this->belongsTo('App\Models\Film');
    }

    public function room() {
        return $this->belongsTo('App\Models\Room');
    }

    public function cinema() {
        return $this->belongsTo('App\Models\Cinema');
    }
}
