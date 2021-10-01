<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\FormatFilmsRepository;
use App\Models\Format_film;

class FormatFilmsEloquentRepository implements FormatFilmsRepository {
    public function getAll()
    {
        return Format_film::all();
    }

    public function get($id)
    {
        return Format_film::findOrFail($id);
    }

    public function create($attributes)
    {
        return Format_film::create($attributes);
    }

    public function update($id, $attributes)
    {
        $format_film = $this->get($id);
        $format_film->format_name = $attributes['format_name'];

        return $format_film->save();

    }

    public function delete($id)
    {
        $format_film = $this->get($id);
        $format_film->destroy($id);
    }
}