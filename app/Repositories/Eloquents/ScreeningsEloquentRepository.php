<?php 

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\ScreeningsRepository;
use App\Models\Screening;

class ScreeningsEloquentRepository implements ScreeningsRepository {
    public function getAll()
    {
        return Screening::all();
    }

    public function getAllOfCinema($cinema_id)
    {
        return Screening::where('cinema_id',$cinema_id)->get();
    }

    public function get($id)
    {
        return Screening::findOrFail($id);
    }
    public function getDate($cinema_id, $film_id)
    {
        return Screening::where('cinema_id',$cinema_id)->where('film_id',$film_id)->get();
    }

    public function getTime($cinema_id, $film_id, $date)
    {
        return Screening::where('cinema_id',$cinema_id)->where('film_id',$film_id)->where('date',$date)->get();

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