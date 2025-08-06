<?php

namespace App\Http\Controllers;

use App\Interface\BoardingHouseRepositoryInterface;
use App\Interface\CityRepositoryInterface;

class CityController extends Controller
{
    private BoardingHouseRepositoryInterface $boardingHouseRepository;
    private CityRepositoryInterface $cityRepository;

    public function __construct(
        BoardingHouseRepositoryInterface $boardingHouseRepository,
        CityRepositoryInterface $cityRepository
    ) {
        $this->boardingHouseRepository = $boardingHouseRepository;
        $this->cityRepository = $cityRepository;
    }

    public function show($slug)
    {
        $boardingHouses = $this->boardingHouseRepository->getBoardingHouseByCitySlug($slug);
        $city = $this->cityRepository->getCityBySlug($slug);

        return view('pages.city.show', compact('boardingHouses', 'city'));
    }
}
