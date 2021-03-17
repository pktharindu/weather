<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Http\Requests\DashboardRequest;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum', 'verified']);
    }

    public function index(DashboardRequest $request)
    {
        $latitude =  $request->latitude ?? 6.8464;
        $longitude =  $request->longitude ?? 79.9486;

        $response = Http::get('https://api.openweathermap.org/data/2.5/onecall?lat='. $latitude .'&lon='. $longitude .'&exclude=minutely,hourly&appid='. config('services.weather.api'))->throw();

        return view('dashboard')
            ->withLatitude($latitude)
            ->withLongitude($longitude)
            ->withWeather($response->body()); // or use $response->json()
    }
}
