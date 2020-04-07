<?php

namespace App\Repositories;

use App\Repostiories\Models\User;

class UserRepository extends AbstractRepository
{
    public function __construct()
    {
        $this->model = new User();
    }
}
