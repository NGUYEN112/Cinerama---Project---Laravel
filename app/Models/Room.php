<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_name',
        'cinema_id'
    ];

    public function cinema() {
       return $this->belongsTo('App\Models\Cinema');
    }
}
