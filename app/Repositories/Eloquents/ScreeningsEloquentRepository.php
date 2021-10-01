<?php 

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ScreeningsRepository;
use App\Models\Screening;

class ScreeningsEloquentRepository implements ScreeningsRepository {
    public function getAll()
    {
        return Screening::all();
    }

    public function get($id)
    {
        return Screening::findOrFail($id);
    }

    public function create($attributes)
    {
        return Screening::create($attributes);
    }

    public function update($id, $attributes)
    {
        $screening = $this->get($id);
        $screening->date = $attributes['date'];
        $screening->start_time = $attributes['start_time'];
        $screening->film_id = $attributes['film_id'];
        $screening->room_id = $attributes['room_id'];
        $screening->cinema_id = $attributes['cinema_id'];

        return $screening->save();

    }

    public function delete($id)
    {
        $screening = $this->get($id);
        $screening->destroy($id);
    }
}