<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;
use App;

class RegionsCtrl extends Controller
{
    public function index($lang)
    {
        App::setLocale($lang);
        $data = Region::select('name_'.$lang.' as name', 'poster','id','full_text_'.$lang.' as full_text','slug')->latest()->get();
        return view('site.regions.list',compact('data'));
    }

    public function view($lang,$slug)
    {
        App::setLocale($lang);
        $data = Region::select('name_'.$lang.' as name', 'poster','id','full_text_'.$lang.' as full_text','slug')->where('slug',$slug)->first();

        if(!empty($data)){
            $related = Region::inRandomOrder()
                            ->select('name_'.$lang.' as name', 'poster','id','full_text_'.$lang.' as full_text','slug')

                            ->limit(6)
                            ->get();

            return view('site.regions.view',compact('data','related'));
        }

        return redirect('/'.$lang.'/404');

    }
}
