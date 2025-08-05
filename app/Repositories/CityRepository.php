<?php

namespace App\Repositories;

use App\Interface\CityRepositoryInterface;
use App\Models\City;

Class CityRepository implements CityRepositoryInterface
{
    public function getAllCities()
    {
        return City::all();
    }

}