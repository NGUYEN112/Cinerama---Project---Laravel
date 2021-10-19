<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\CinemasRepository;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\RoomsRepository;
use App\Repositories\Contracts\ScreeningsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminScreeningController extends Controller
{
    //
    protected $screeningRepository;
    protected $filmRepository;
    protected $roomRepository;
    protected $cinemaRepository;


    public function __construct(
        ScreeningsRepository    $screeningsRepository,
        CinemasRepository       $cinemasRepository,
        RoomsRepository         $roomsRepository,
        FilmsRepository         $filmsRepository
        )
    {
        $this->screeningRepository = $screeningsRepository;
        $this->cinemaRepository = $cinemasRepository;
        $this->roomRepository = $roomsRepository;
        $this->filmRepository = $filmsRepository;
    }

    public function listScreeningPage() {
        if(auth()->user()->role_id == 1 )
        $screenings = $this->screeningRepository->getAll();
        else 
        $screenings = $this->screeningRepository->getAllOfCinema(auth()->user()->cinema_id);
        return view('admins.screenings.list',compact('screenings'));
    }

    public function createScreeningPage() {
        $rooms = $this->roomRepository->getRoomOfCinema(auth()->user()->cinema_id);
        $films = $this->filmRepository->getAll();
        return view('admins.screenings.create',compact('rooms','films'));
    }

    public function storeScreening(Request $request) {
        $attributes = [
            'date' => $request->date,
            'start_time' => $request->start_time,
            'cinema_id'  => auth()->user()->cinema_id,
            'room_id'    => $request->room_id,
            'film_id'    => $request->film_id
        ];

        $this->screeningRepository->create($attributes);
        return redirect('/admin/screenings');
    }

    public function editScreeningPage($id) {
        $screening = $this->screeningRepository->get($id);
        $rooms = $this->roomRepository->getRoomOfCinema(auth()->user()->cinema_id);
        $films = $this->filmRepository->getAll();
        return view('admins.screenings.edit',compact('rooms','films','screening'));
    }

    public function updateScreening($id,Request $request) {
        $attributes = [
            'date' => $request->date,
            'start_time' => $request->start_time,
            'cinema_id'  => auth()->user()->cinema_id,
            'room_id'    => $request->room_id,
            'film_id'    => $request->film_id
        ];
        $this->screeningRepository->update($id,$attributes);
        return redirect('/admin/screenings');
    }

    public function delete($id) {
        $this->screeningRepository->delete($id);
        return redirect('/admin/screenings');
    }
}
