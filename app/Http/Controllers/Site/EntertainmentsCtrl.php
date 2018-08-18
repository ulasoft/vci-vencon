<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;
use App\Distinction;

class EntertainmentsCtrl extends Controller
{
    public function index($lang)
    {
        App::setLocale($lang);
        $data = Distinction::latest('id')->paginate(10);
        return view('site.hotels',compact('data'));
    }
}
