<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\CinemasRepository;
use App\Repositories\Contracts\CombosRepository;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\ScreeningsRepository;
use Illuminate\Http\Request;

class OrderTicketController extends Controller
{
    protected $cinemaRepository;
    protected $filmRepository;
    protected $comboRepository;
    protected $screeningRepository;


    public function __construct(
        CinemasRepository $cinemasRepository,
        FilmsRepository   $filmsRepository,
        CombosRepository  $combosRepository,
        ScreeningsRepository $screeningsRepository
    )
    {
        $this->cinemaRepository   = $cinemasRepository;
        $this->filmRepository     = $filmsRepository;
        $this->comboRepository    = $combosRepository;
        $this->screeningRepository= $screeningsRepository;
    }

    public function getCinema() {
        $cinemas = $this->cinemaRepository->getAll();
        return json_encode(array('data' => $cinemas));
    }

    public function getFilm() {
        $films = $this->filmRepository->getPublishedFilm();
        return json_encode(array('data' => $films));
    }
    public function getFilmForRemark(){
        $films = $this->filmRepository->getAll();
        return json_encode(array('data' => $films));
    }

    public function getCombo() {
        $combos = $this->comboRepository->getAll();
        return json_encode(array('data' => $combos));
    }

    public function getDate($cinema_id, $film_id) {
        $date = $this->screeningRepository->getDate($cinema_id,$film_id);
        return json_encode(array('data' => $date));
    }

    public function getTime($cinema_id,$film_id,$date) {
        $time = $this->screeningRepository->getTime($cinema_id,$film_id,$date);
        return json_encode(array('data'=>$time));
    }
}
