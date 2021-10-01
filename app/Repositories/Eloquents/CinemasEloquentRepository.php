<?php 

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\CinemasRepository;
use App\Models\Cinema;

class CinemasEloquentRepository implements CinemasRepository {
    public function getAll()
    {
        return Cinema::all();
    }

    public function get($id)
    {
        return Cinema::findOrFail($id);
    }

    public function create($attributes)
    {
        return Cinema::create($attributes);
    }

    public function update($id, $attributes)
    {
        $cinema = $this->get($id);
        $cinema->cinema_name = $attributes['cinema_name'];
        $cinema->address = $attributes['address'];
        $cinema->information = $attributes['information'];

        return $cinema->save();

    }

    public function delete($id)
    {
        $cinema = $this->get($id);
        $cinema->destroy($id);
    }
}