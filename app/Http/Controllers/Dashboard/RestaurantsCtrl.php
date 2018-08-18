<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Restaurant;

class RestaurantsCtrl extends Controller
{
    public function index()
    {
        $data = Restaurant::latest('id')->paginate(20);
        return view('dashboard.restaurant.list',compact('data'));
    }

    public function add()
    {
        return view('dashboard.restaurant.add');
    }


    public function create($lang, Request $req)
    {
        $h = new Restaurant;
        $h->name = $req->name;
        $h->full_text = $req->full_text;
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/restaurants');
            $h->poster = $path;
        }
        $h->slug = str_slug($req->name);
        $h->descr = mb_substr(strip_tags($req->full_text),0,250);
        $h->keywords = Str_replace(' ',',',mb_substr(strip_tags($req->full_text),0,250));
        $h->moder = 1;
        $h->address = $req->address;
        $h->lang = $req->lang;
        $h->save();

        $req->session()->flash('status', trans('admin.success_add'));
        return redirect(Route('res_d',['ru']));

    }

    public function update($lang, $id, Request $req)
    {
        $h = Restaurant::find($id);
        $h->name = $req->name;
        $h->full_text = $req->full_text;
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/hotels');
            if(is_file($h->poster)){
                unlink($h->poster);
            }
            $h->poster = $path;
        }else{
            $h->poster = $h->poster;
        }
        $h->slug = str_slug($req->name);
        $h->descr = mb_substr(strip_tags($req->full_text),0,250);
        $h->keywords = Str_replace(' ',',',mb_substr(strip_tags($req->full_text),0,250));
        $h->moder = 1;
        $h->address = $req->address;
        $h->lang = $req->lang;
        $h->save();

        $req->session()->flash('status', trans('admin.success_edit'));
        return redirect(Route('res_d',['ru']));
    }

    public function edit($lang, $id)
    {
        $data = Restaurant::find($id);
        return view('dashboard.restaurant.edit',compact('data'));
    }

    public function delete($lang, $id, Request $req)
    {
        $r = Restaurant::find($id);
        if(!empty($r->poster)){
            if(is_file($r->poster)){
                unlink($r->poster);
            }
        }
        $r->delete();

        $req->session()->flash('status', trans('admin.success_delete'));
        return redirect(Route('res_d',['ru']));
    }

}
