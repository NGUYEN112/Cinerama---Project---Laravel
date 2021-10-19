<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\RemarkablesRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $filmRepository;
    protected $remarkableRepository;

    public function __construct(FilmsRepository $filmsRepository,
    RemarkablesRepository   $remarkablesRepository
    )
    {
        $this->filmRepository = $filmsRepository;
        $this->remarkableRepository = $remarkablesRepository;

    }
    public function clientHomePage() {
        $remarkables = $this->remarkableRepository->getAvailable();
        // dd($remarkables);
        $publisheds = $this->filmRepository->getPublishedFilm();
        $unpublisheds = $this->filmRepository->getUnPublishedFilm();
        return view('clients.home', compact('publisheds','unpublisheds','remarkables'));
    }

    public function getRemark() {
        $remarkables = $this->remarkableRepository->getAvailable();
        return json_encode(array('data'=> $remarkables));
    }
}
