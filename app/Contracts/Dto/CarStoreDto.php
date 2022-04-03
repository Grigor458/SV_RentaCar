<?php

namespace App\Contracts\Dto;

use Spatie\DataTransferObject\DataTransferObject;
use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;


class CarStoreDto extends DataTransferObject
{
    /**
     * @var Car
     * @var string
     **/
    public string $name;

}

