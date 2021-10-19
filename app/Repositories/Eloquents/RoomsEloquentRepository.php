<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\RoomsRepository;
use App\Models\Room;

class RoomsEloquentRepository implements RoomsRepository {
    public function getAll()
    {
        return Room::all();
    }
    public function getRoomOfCinema($cinema_id)
    {
        return Room::where('cinema_id',$cinema_id)->get();
    }

    public function get($id)
    {
        return Room::findOrFail($id);
    }

    public function create($attributes)
    {
        return Room::create($attributes);
    }

    public function update($id, $attributes)
    {
        $room = $this->get($id);
        $room->room_name = $attributes['room_name'];

        return $room->save();

    }

    public function delete($id)
    {
        // $room = $this->get($id);
        // $room->destroy($id);
    }
}