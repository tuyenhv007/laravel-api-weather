<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index()
    {
        $response = Http::get('api.openweathermap.org/data/2.5/weather?id=1581130&appid=100242b7cac524af1fdf1669ad965275');
        $result = json_decode($response);
        $celsius = floor($result->main->temp - 273);
        $city = $result->name;

        return view('index', compact('celsius', 'city'));
    }
}
