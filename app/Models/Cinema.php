<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    use HasFactory;
    protected $fillable = [
        'cinema_name',
        'address',
        'information'
    ];

    public function room() {
        return $this->hasMany('App\Models\Room');
     }

     public function screening() {
        return $this->hasMany('App\Models\Screening');
     }

     public function user() {
        return $this->hasMany('App\Models\User');
     }
}
