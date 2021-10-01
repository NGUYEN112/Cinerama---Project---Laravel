<?php 

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CombosRepository;
use App\Models\Combo;

class CombosEloquentRepository implements CombosRepository {
    public function getAll()
    {
        return Combo::all();
    }

    public function get($id)
    {
        return Combo::findOrFail($id);
    }

    public function create($attributes)
    {
        return Combo::create($attributes);
    }

    public function update($id, $attributes)
    {
        $combo = $this->get($id);
        $combo->product_name = $attributes['product_name'];
        $combo->product_detail = $attributes['product_detail'];
        $combo->product_image = $attributes['product_image'];
        $combo->product_value = $attributes['product_value'];

        return $combo->save();

    }

    public function delete($id)
    {
        $combo = $this->get($id);
        $combo->destroy($id);
    }
}