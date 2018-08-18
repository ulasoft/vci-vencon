<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App\Restaurant;
use App\Distinction;
use App\Hotel;

class IndexCtrl extends Controller
{
    public function index()
    {
        $hotels = Hotel::all()->count();
        $res = Restaurant::all()->count();
        $dis = Distinction::all()->count();
        return view('dashboard.index',compact('hotels','res','dis'));
    }
}
