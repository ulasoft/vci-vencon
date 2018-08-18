<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App;

class IndexCtrl extends Controller
{
    public function index($lang)
    {
        App::setLocale($lang);
        return view('site.index');
    }
}
