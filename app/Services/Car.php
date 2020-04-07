<?php

namespace App\Services;

use App\Repositories\CarRepository;

class Car
{
    private $carRepository;

    public function __construct()
    {
        $this->carRepository = new CarRepository();
    }

    public function index(array $params)
    {
        return $this->carRepository->allNoTrashed();
    }

    public function store(array $params)
    {
        return $this->carRepository->create($params);
    }

    public function show(string $id)
    {
        return $this->carRepository->findFirst('_id', $id);
    }

    public function update(array $params, string $id)
    {
        return $this->carRepository->updateCustom($params, $id, '_id');
    }

    public function delete(string $id)
    {
        return $this->carRepository->delete($id);
    }
}
