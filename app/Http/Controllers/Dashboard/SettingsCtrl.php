<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingsCtrl extends Controller
{
    public function index()
    {
        $data = Setting::find(1);
        if(!empty($data)){
            return view('dashboard.settings', compact('data'));
        }else{
            $s = new Setting;
            $s->title_uz = 'title uz';
            $s->title_ru = 'title ru';
            $s->title_en = 'title en';
            $s->save();

            return redirect(route('settings',['ru']));
        }
    }
}
