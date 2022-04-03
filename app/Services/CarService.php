<?php

namespace App\Services;

use App\Models\Car;
use App\Contracts\CarService as CarServiceContract;
use App\Contracts\Dto\CarStoreDto;

/**
 * Class CarService
 * @package Services\CarService
 */
class CarService implements CarServiceContract
{

    public function store(CarStoreDto $obRequest): Car
    {
        /** @var Car $obRequest */
        $obCar = Car::create($obRequest->all());
        return $obCar;
    }

}
