<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\CinemasRepository;
use Illuminate\Http\Request;

class AdminCinemaController extends Controller
{
    //
    protected $cinemaRepository;

    public function __construct(CinemasRepository $cinemasRepository)
    {
        $this->cinemaRepository = $cinemasRepository;
    }

    public function listCinemaPage() {
        $cinemas = $this->cinemaRepository->getAll();
        return view('admins.cinemas.list-cinema',compact('cinemas'));
    }

    //Create Cinema
    public function createCinemaPage() {
        return view('admins.cinemas.create-cinema');
    }

    public function createCinema(Request $request) {
        $attributes = [
            'cinema_name' => $request->cinema_name,
            'address'     => $request->address,
            'information' => $request->information
        ];

        $this->cinemaRepository->create($attributes);
        return redirect('/admin/cinemas');
    }

    //Edit Cinema 
    public function editCinemaPage($id) {
        $cinema = $this->cinemaRepository->get($id);
        return view('admins.cinemas.edit-cinema',compact('cinema'));
    }

    public function updateCinema($id, Request $request) {
        $attributes = [
            'cinema_name' => $request->cinema_name,
            'address'     => $request->address,
            'information' => $request->information
        ];
        $this->cinemaRepository->update($id,$attributes);
        return redirect('/admin/cinemas');
    }
}
