<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;

class RegionsCtrl extends Controller
{
    public function index()
    {
        $data = Region::latest('id')->get();
        return view('dashboard.regions.list',compact('data'));
    }

    public function add()
    {
        return view('dashboard.regions.add');
    }

    public function delete($lang, $id, Request $req)
    {
        $r = Region::find($id);
        if(!empty($r->poster)){
            if(is_file($r->poster)){
                unlink($r->poster);
            }
        }
        $r->delete();

        $req->session()->flash('status', trans('admin.success_delete'));
        return redirect(Route('regions_d',['ru']));
    }

    public function created($lang, Request $req)
    {
        $r = new Region;
        $r->name_uz = $req->name_uz;
        $r->name_ru = $req->name_ru;
        $r->name_en = $req->name_en;
        $r->full_text_uz = $req->full_text_uz;
        $r->full_text_en = $req->full_text_en;
        $r->full_text_ru = $req->full_text_ru;
        $r->slug = str_slug($req->name_en);
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/regions');
            $r->poster = $path;
        }
        $r->moder = 1;
        //$r->keywords =
        $r->save();

        $req->session()->flash('status', trans('admin.success_add'));
        return redirect(Route('regions_d',['ru']));
    }

    public function edit($lang, $id)
    {
        $data = Region::find($id);
        return view('dashboard.regions.edit',compact('data'));
    }

    public function updage($lang, $id, Request $req)
    {
        $r = Region::find($id);
        $r->name_uz = $req->name_uz;
        $r->name_ru = $req->name_ru;
        $r->name_en = $req->name_en;
        $r->full_text_uz = $req->full_text_uz;
        $r->full_text_en = $req->full_text_en;
        $r->full_text_ru = $req->full_text_ru;
        $r->slug = str_slug($req->name_en);
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/regions');
            if(is_file($r->poster)){
                unlink($r->poster);
            }
            $r->poster = $path;
        }else{
            $r->poster = $r->poster;
        }
        $r->moder = 1;
        //$r->keywords =
        $r->save();

        $req->session()->flash('status', trans('admin.success_edit'));
        return redirect(Route('regions_d',['ru']));
    }
}
