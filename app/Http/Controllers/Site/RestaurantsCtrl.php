<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Restaurant;

class RestaurantsCtrl extends Controller
{
    public function index($lang)
    {
        App::setLocale($lang);
        $data = Restaurant::latest('id')->where('lang', $lang)->paginate(10);
        return view('site.hotels',compact('data'));
    }
}
