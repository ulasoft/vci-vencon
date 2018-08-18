<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Distinction;

class DistinctionsCtrl extends Controller
{
    public function index()
    {
        $data = Distinction::latest('id')->paginate(20);
        return view('dashboard.distinctions.list',compact('data'));
    }

    public function add()
    {
        return view('dashboard.distinctions.add');
    }


    public function create($lang, Request $req)
    {
        $h = new Distinction;
        $h->name = $req->name;
        $h->full_text = $req->full_text;
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/distinctions');
            $h->poster = $path;
        }
        $h->slug = str_slug($req->name);
        $h->descr = mb_substr(strip_tags($req->full_text),0,250);
        $h->keywords = Str_replace(' ',',',mb_substr(strip_tags($req->full_text),0,250));
        $h->moder = 1;
        $h->lang = $req->lang;
        $h->address = $req->address;
        $h->save();

        $req->session()->flash('status', trans('admin.success_add'));
        return redirect(Route('dis_d',['ru']));

    }

    public function update($lang, $id, Request $req)
    {
        $h = Distinction::find($id);
        $h->name = $req->name;
        $h->full_text = $req->full_text;
        if(!empty($req->poster)){
            $path = $req->poster->store('uploads/distinctions');
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
        return redirect(Route('dis_d',['ru']));
    }

    public function edit($lang, $id)
    {
        $data = Distinction::find($id);
        return view('dashboard.distinctions.edit',compact('data'));
    }

    public function delete($lang, $id, Request $req)
    {
        $r = Distinction::find($id);
        if(!empty($r->poster)){
            if(is_file($r->poster)){
                unlink($r->poster);
            }
        }
        $r->delete();

        $req->session()->flash('status', trans('admin.success_delete'));
        return redirect(Route('dis_d',['ru']));
    }
}
