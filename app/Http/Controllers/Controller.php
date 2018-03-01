<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Gmopx\LaravelOWM\LaravelOWM;

class Controller extends BaseController
{
    public function foo()
    {
    $lowm = new LaravelOWM();
    $current_weather = $lowm->getCurrentWeather('Szczecin', $lang='pl');

    //dd($current_weather->temperature);
    return view('welcome')->with(['current_weather'=>$current_weather]);
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
