<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\RemarkablesRepository;
use Illuminate\Http\Request;

class FilmController extends Controller
{   
    protected $filmRepository;

    public function __construct(
        FilmsRepository         $filmsRepository,
    ) 
    {
        $this->filmRepository = $filmsRepository;
    }
    //List Film Page start
    public function clientFilmPage() {
        $publisheds = $this->filmRepository->getPublishedFilm();
        return view('clients.list-film',compact('publisheds'));
    }

    //List Film Page end

    //Detail Film Page start
    public function filmDetailPage() {
        return view('clients.detail-film');
    }

    //Detail Film Page end

    public function getFilm($id) {
        $this->filmRepository->get($id);
        return view('');
    }
}
