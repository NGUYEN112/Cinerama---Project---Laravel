<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\FilmsRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $filmRepository;
    public function __construct(FilmsRepository $filmsRepository)
    {
        $this->filmRepository = $filmsRepository;
    }
    public function clientHomePage() {
        $publisheds = $this->filmRepository->getPublishedFilm();
        $unpublisheds = $this->filmRepository->getUnPublishedFilm();
        return view('clients.home', compact('publisheds','unpublisheds'));
    }
}
