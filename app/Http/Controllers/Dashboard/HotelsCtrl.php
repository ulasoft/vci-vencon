<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hotel;

class HotelsCtrl extends Controller
{
    public function index()
    {
        $data = Hotel::latest('id')->paginate(20);
        return view('dashboard.hotels.list',compact('data'));
    }

    public function add()
    {
        return view('dashboard.hotels.add');
    }

    public function create($lang, Request $req)
    {
        $h = new Hotel;
        $h->name = $req->name;
        $h->full_text = $req->full_text;
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/hotels');
            $h->poster = $path;
        }
        $h->slug = str_slug($req->name);
        $h->descr = mb_substr(strip_tags($req->full_text),0,250);
        $h->keywords = Str_replace(' ',',',mb_substr(strip_tags($req->full_text),0,250));
        $h->moder = 1;
        $h->lang = $req->lang;
        $h->save();

        $req->session()->flash('status', trans('admin.success_add'));
        return redirect(Route('hotels_d',['ru']));

    }

    public function edit($lang, $id)
    {
        $data = Hotel::find($id);
        return view('dashboard.hotels.edit',compact('data'));
    }

    public function update($lang, $id, Request $req)
    {
        $h = Hotel::find($id);
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
        $h->lang = $req->lang;
        $h->save();

        $req->session()->flash('status', trans('admin.success_edit'));
        return redirect(Route('hotels_d',['ru']));
    }

    public function delete($lang, $id, Request $req)
    {
        $r = Hotel::find($id);
        if(!empty($r->poster)){
            if(is_file($r->poster)){
                unlink($r->poster);
            }
        }
        $r->delete();

        $req->session()->flash('status', trans('admin.success_delete'));
        return redirect(Route('hotels_d',['ru']));
    }
}
