<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\CinemasRepository;
use App\Repositories\Contracts\RoomsRepository;
use Illuminate\Http\Request;

class AdminRoomController extends Controller
{
    protected $roomRepository;
    protected $cinemaRepository;


    public function __construct(
        RoomsRepository $roomsRepository,
        CinemasRepository $cinemasRepository
    )
    {
    
        $this->roomRepository= $roomsRepository;
        $this->cinemaRepository= $cinemasRepository;
    }

    public function listRoomPage() {
        $rooms = $this->roomRepository->getAll();
        return view('admins.rooms.list',compact('rooms'));
    }

    public function createRoomPage() {
        $cinemas = $this->cinemaRepository->getAll();
        return view('admins.rooms.create',compact('cinemas'));
    }

    public function storeRoom(Request $request) {
        $attributes = [
            'room_name' => $request->room_name,
            'cinema_id' => $request->cinema_id
        ];
        $this->roomRepository->create($attributes);
        return redirect('/admin/rooms');
    }

    public function editRoomPage($id) {
        $room = $this->roomRepository->get($id);
        $cinemas = $this->cinemaRepository->getAll();
        return view('admins.rooms.edit',compact('room','cinemas'));
    }

    public function updateRoom($id, Request $request) {
        $attributes = [
            'room_name' => $request->room_name,
            'cinema_id' => $request->cinema_id
        ];
        $this->roomRepository->update($id,$attributes);
        return redirect('/admin/rooms');
    }

    public function delete($id) {
        $this->roomRepository->delete($id);
        return redirect('/admin/rooms');
    }

}
