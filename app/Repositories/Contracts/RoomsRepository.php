<?php 

namespace App\Repositories\Contracts;

use App\Repositories\RepositoryInterface;

interface RoomsRepository extends RepositoryInterface {
    public function   getRoomOfCinema($cinema_id);
}