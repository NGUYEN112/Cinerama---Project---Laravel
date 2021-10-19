<?php 

namespace App\Repositories\Contracts;
use App\Repositories\RepositoryInterface;

interface ScreeningsRepository extends RepositoryInterface {
    public function getDate($cinema_id,$film_id);
    public function getTime($cinema_id,$film_id,$date);
    public function getAllOfCinema($cinema_id);
}