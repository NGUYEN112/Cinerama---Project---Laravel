<?php 

namespace App\Repositories\Contracts;
use App\Repositories\RepositoryInterface;

interface FilmsRepository extends RepositoryInterface {
    public function getPublishedFilm();
    public function getUnPublishedFilm();
}