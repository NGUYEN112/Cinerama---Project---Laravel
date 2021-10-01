<?php 
namespace App\Repositories\Eloquents;

use App\Models\Revenue;
use App\Repositories\Contracts\RevenuesRepository;

class RevenuesEloquentRepository implements RevenuesRepository {
    public function getAll()
    {
        return Revenue::all();
    }

    public function get($id)
    {
        return Revenue::findOrFail($id);
    }

    public function create($attributes)
    {
        return Revenue::create($attributes);
    }

    public function update($id, $attributes)
    {
        // $revenue = $this->get($id);
        // $revenue->full_name = $attributes['full_name'];
        // $revenue->avatar = $attributes['avatar'];
        // $revenue->phone_number = $attributes['phone_number'];


        // return $revenue->save();

    }

    public function delete($id)
    {
        // $revenue = $this->get($id);
        // $revenue->destroy($id);
    }
}