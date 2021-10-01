<?php 

namespace App\Repositories\Eloquents;

use App\Models\Order;
use App\Repositories\Contracts\OrdersRepository;

class OrdersEloquentRepository implements OrdersRepository {
    public function getAll()
    {
        return Order::all();
    }

    public function get($id)
    {
        return Order::findOrFail($id);
    }

    public function create($attributes)
    {
        return Order::create($attributes);
    }

    public function update($id, $attributes)
    {

    }

    public function delete($id)
    {
        $order = $this->get($id);
        $order->destroy($id);
    }
}