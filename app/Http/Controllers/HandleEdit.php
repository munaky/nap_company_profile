<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PageSetting;

class HandleEdit extends Controller
{
    public function __invoke(Request $req, $page, $content){
        if(method_exists($this, $page . '_' . $content)){
            $this->{$page . '_' . $content}($req);
        }

        return redirect("/admin/$page");
    }

    private function home_gambarHero(Request $req){
        //
    }

    private function home_textHero(Request $req){
        PageSetting::where('name', 'home_main_title')->update(['value' => $req->title ? $req->title : '']);
        PageSetting::where('name', 'home_main_text')->update(['value' => $req->text ? $req->text : '']);
    }

    private function home_textProduk(Request $req){
        PageSetting::where('name', 'home_second_title')->update(['value' => $req->title ? $req->title : '']);
        PageSetting::where('name', 'home_second_text')->update(['value' => $req->text ? $req->text : '']);
    }
}
