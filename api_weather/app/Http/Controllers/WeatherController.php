<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class WeatherController extends Controller
{
    function index()
    {
        $response = Http::get('https://api.openweathermap.org/data/2.5/weather', [
            "q" => "HaNoi",
            "appid" => "6aeede4568e402a71a4221c837aa044b"  // Thay your_api_key bằng API key của bạn
        ]);

        $data = $response->object();
        $tempC = $data->main->temp - 273.15; // Đổi từ Kelvin sang Celsius
        $typeWeather = $data->weather[0]->main;
        $speedWind = $data->wind->speed;
        $location = $data->name;
        $humidity = $data->main->humidity;
        $icon = $data->weather[0]->icon;
        $iconWeather = "https://openweathermap.org/img/wn/{$icon}@4x.png";
        $currentTime = Carbon::now()->toDateTimeString();

        return view('index', compact('tempC', 'typeWeather', 'speedWind', 'location', 'humidity', 'currentTime', 'iconWeather'));
    }
}
