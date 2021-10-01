<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\FilmsRepository;
use App\Repositories\Contracts\FormatFilmsRepository;
use Illuminate\Http\Request;

class AdminFilmController extends Controller
{
    //
    protected $filmRepository;
    protected $formatFilmRepository;
    public function __construct(
        FilmsRepository         $filmRepository,
        FormatFilmsRepository   $formatFilmRepository
    ) {
        $this->filmRepository       = $filmRepository;
        $this->formatFilmRepository = $formatFilmRepository;
    }

    public function listFilmPage()
    {
        $films = $this->filmRepository->getAll();
        return view('admins.films.list-film', compact('films'));
    }

    //Add Film start
    public function addFilmPage()
    {
        $formats = $this->formatFilmRepository->getAll();
        return view('admins.films.create-film', compact('formats'));
    }

    public function storeFilm(Request $request)
    {
        if ($request->hasFile('poster')) {
            $path = base64_encode(file_get_contents($request->file('poster')));
            $poster = 'data:image/jpg;base64,' . $path;
        }

        if ($request->hasFile('banner')) {
            $path = base64_encode(file_get_contents($request->file('banner')));
            $banner = 'data:image/jpg;base64,' . $path;
        }
        $attributes = [
            'film_name'   => $request->film_name,
            'global_name'      => $request->global_name,
            'poster'   => $poster,
            'banner' => $banner,
            'producer'   => $request->producer,
            'categories'      => $request->categories,
            'director'   => $request->director,
            'caster'      => $request->caster,
            'duration'   => $request->duration,
            'release_date'      => $request->release_date,
            'status'   => $request->status,
            'trailer'      => $request->trailer,
            'description'   => $request->description,
            'format_id'      => $request->format_id,
        ];

        $this->filmRepository->create($attributes);
        return redirect('/admin/films');
    }
    //end Add Film

    //Edit film start

    public function editFilmPage($id)
    {
        $film = $this->filmRepository->get($id);
        return view('admins.films.edit-film', compact('film'));
    }

    public function updateFilm(Request $request, $id)
    {
        if ($request->hasFile('poster')) {
            $path_poster = base64_encode(file_get_contents($request->file('poster')));
            $poster = 'data:image/jpg;base64,' . $path_poster;
        }

        if ($request->hasFile('banner')) {
            $path_banner = base64_encode(file_get_contents($request->file('banner')));
            $banner = 'data:image/jpg;base64,' . $path_banner;
        }
        $attributes = [
            'film_name'   => $request->film_name,
            'global_name'      => $request->global_name,
            'poster'   => $poster,
            'banner' => $banner,
            'producer'   => $request->producer,
            'categories'      => $request->categories,
            'director'   => $request->director,
            'caster'      => $request->caster,
            'duration'   => $request->duration,
            'release_date'      => $request->release_date,
            'status'   => $request->status,
            'trailer'      => $request->trailer,
            'description'   => $request->description,
            'format_id'      => $request->format_id,
        ];
        $this->filmRepository->update($id, $attributes);
        return redirect('/admin/films');
    }
}
