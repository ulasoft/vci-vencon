<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Hotel;

class HotelsCtrl extends Controller
{
    public function index($lang)
    {
        App::setLocale($lang);
        $data = Hotel::latest('id')->paginate(10);

        return view('site.hotels',compact('data'));
    }
}
