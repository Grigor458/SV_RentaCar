<?php

namespace App\Http\Controllers\Api;

use App\Contracts\Dto\CarStoreDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\CarStoreRequest;
use App\Http\Resources\CarStoreResource;
use App\Contracts\CarService;
use App\Models\Car;
use Illuminate\Http\Request;


class CarController extends Controller
{

    public CarService $obCarService;

    public function __construct(CarService $obCarService)
    {
        $this->obCarService = $obCarService;
    }

    public function index()
    {
        return Car::all();
    }

    /**
     * @param CarStoreRequest $obRequest
     * @return CarStoreResource
     * @throws \Spatie\DataTransferObject\Exceptions\UnknownProperties
     */
    public function store(CarStoreRequest $obRequest): CarStoreResource
    {
        $obRequestData = new CarStoreDto($obRequest->validated());

        $obCar = $this->obCarService->store($obRequestData);

        return new CarStoreResource($obCar);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
