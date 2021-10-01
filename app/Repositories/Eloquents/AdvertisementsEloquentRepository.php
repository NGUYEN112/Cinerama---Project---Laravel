<?php

namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\AdvertisementsRepository;
use App\Models\Ad;

class AdvertisementsEloquentRepository implements AdvertisementsRepository {
    public function getAll()
    {
        return Ad::all();
    }

    public function get($id)
    {
        return Ad::findOrFail($id);
    }

    public function create($attributes)
    {
        return Ad::create($attributes);
    }

    public function update($id, $attributes)
    {
        $adv = $this->get($id);
        $adv->company_name = $attributes['company_name'];
        $adv->content = $attributes['content'];
        $adv->duration = $attributes['duration'];
        $adv->end = $attributes['end'];
        $adv->start_time = $attributes['start_time'];


        return $adv->save();

    }

    public function delete($id)
    {
        $adv = $this->get($id);
        $adv->destroy($id);
    }
}