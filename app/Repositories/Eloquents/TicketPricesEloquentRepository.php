<?php 

namespace App\Repositories\Eloquents;

use App\Repositories\Contracts\TicketPricesRepository;
use App\Models\Ticket_price;

class TicketPricesEloquentRepository implements TicketPricesRepository {
    public function getAll()
    {
        return Ticket_price::all();
    }

    public function get($id)
    {
        return Ticket_price::findOrFail($id);
    }

    public function create($attributes)
    {
        return Ticket_price::create($attributes);
    }

    public function update($id, $attributes)
    {
        $ticket_price = $this->get($id);
        $ticket_price->normal_price = $attributes['normal_price'];
        $ticket_price->member_price = $attributes['member_price'];
        $ticket_price->weekend_price = $attributes['weekend_price'];
        $ticket_price->holiday_price = $attributes['holiday_price'];
        $ticket_price->format_id = $attributes['format_id'];


        return $ticket_price->save();

    }

    public function delete($id)
    {
        $ticket_price = $this->get($id);
        $ticket_price->destroy($id);
    }
}