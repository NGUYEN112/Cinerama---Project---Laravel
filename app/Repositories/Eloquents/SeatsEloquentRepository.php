<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\SeatsRepository;
use App\Models\Seat;

class SeatsEloquentRepository implements SeatsRepository {
    public function getAll()
    {

    }

    public function get($id)
    {
        return Seat::findOrFail($id);
    }

    public function create($attributes)
    {
    }

    public function update($id, $attributes)
    {

    }

    public function delete($id)
    {
        // $seat = $this->get($id);
        // $seat->destroy($id);
    }
}