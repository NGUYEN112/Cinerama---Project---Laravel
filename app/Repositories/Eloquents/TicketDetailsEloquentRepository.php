<?php

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\TicketDetailsRepository;
use App\Models\Ticket_detail;

class TicketDetailsEloquentRepository implements TicketDetailsRepository {
    public function getAll()
    {
        return Ticket_detail::all();
    }

    public function get($id)
    {
        return Ticket_detail::findOrFail($id);
    }

    public function create($attributes)
    {
        return Ticket_detail::create($attributes);
    }

    public function update($id, $attributes)
    {
        $ticket_detail = $this->get($id);
        $ticket_detail->status = $attributes['status'];


        return $ticket_detail->save();

    }

    public function delete($id)
    {
        $ticket_detail = $this->get($id);
        $ticket_detail->destroy($id);
    }
}