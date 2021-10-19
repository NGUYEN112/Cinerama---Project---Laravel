<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remarkable extends Model
{
    use HasFactory;
    protected $fillable = [
        'categories',
        'poster',
        'banner',
        'film_id',
        'combo_id',
        'discount_id',
        'status'
    ];

    public function film() {
        return $this->belongsTo('App\Models\Film');
    }
    public function combo() {
        return $this->belongsTo('App\Models\Combo');
    }
    public function discount() {
        return $this->belongsTo('App\Models\Discount');
    }
    
}
