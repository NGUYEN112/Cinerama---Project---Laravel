<?php 
namespace App\Repositories\Eloquents;

use App\Models\Discount;
use App\Repositories\Contracts\DiscountsRepository;

class DiscountsEloquentRepository implements DiscountsRepository {
    public function getAll()
    {
        return Discount::all();
    }

    public function get($id)
    {
        return Discount::findOrFail($id);
    }

    public function create($attributes)
    {
        return Discount::create($attributes);
    }

    public function update($id, $attributes)
    {
        $discount = $this->get($id);
        $discount->information = $attributes['information'];
        $discount->start_time = $attributes['start_time'];
        $discount->end_time = $attributes['end_time'];
        $discount->category_discount = $attributes['category_discount'];
        $discount->discount_method = $attributes['discount_method'];
        $discount->discount_value = $attributes['discount_value'];


        return $discount->save();

    }

    public function delete($id)
    {
        $discount = $this->get($id);
        $discount->destroy($id);
    }
}