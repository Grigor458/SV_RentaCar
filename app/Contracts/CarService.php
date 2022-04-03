<?php

namespace App\Contracts;

use App\Models\Car;
use App\Contracts\Dto\CarStoreDto;

interface CarService
{
    /**
     * @param CarStoreDto $obRequest
     */
    public function store(CarStoreDto $obRequest): ?Car;
}


