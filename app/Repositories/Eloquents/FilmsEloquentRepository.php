<?php 

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\FilmsRepository;
use App\Models\Film;
use DateTime;

class FilmsEloquentRepository implements FilmsRepository {
    public function getAll()
    {
        $nowdate = new DateTime('today');
        $films = Film::all();
        foreach($films as $film) {
            if($film->release_date <= $nowdate && $film->status == 0 ) {
                Film::where('id', $film->id)->update([
                    'status' => 1
                ]);
            };
        }
        return Film::all();
    }

    

    public function get($id)
    {
        $nowdate = new DateTime('today');
        $film = Film::findOrFail($id);
        if($film->release_date <= $nowdate && $film->status == 0 ) {
            Film::where('id', $id)->update([
                'status' => 1
            ]);
        };
        return Film::findOrFail($id);
    }

    public function getPublishedFilm()
    {
        return Film::where('status',1)->get();
    }

    public function getUnPublishedFilm()
    {
        return Film::where('status',0)->get();
    }

    public function create($attributes)
    {
        return Film::create($attributes);
    }

    public function update($id, $attributes)
    {
        $film = $this->get($id);
        $film->film_name = $attributes['film_name'];
        $film->global_name = $attributes['global_name'];
        $film->poster = $attributes['poster'];
        $film->banner = $attributes['banner'];
        $film->producer = $attributes['producer'];
        $film->categories = $attributes['categories'];
        $film->director = $attributes['director'];
        $film->caster = $attributes['caster'];
        $film->duration = $attributes['duration'];
        $film->release_date = $attributes['release_date'];
        $film->status = $attributes['status'];
        $film->trailer = $attributes['trailer'];
        $film->description = $attributes['description'];
        $film->format_id = $attributes['format_id'];


        return $film->save();

    }

    public function delete($id)
    {
        $film = $this->get($id);
        $film->destroy($id);
    }
}