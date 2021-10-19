<?php 

namespace App\Repositories\Contracts;
use App\Repositories\RepositoryInterface;

interface RemarkablesRepository extends RepositoryInterface {
    public function changeStatus($id,$status);
    public function getAvailable();
}