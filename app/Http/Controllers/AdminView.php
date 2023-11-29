<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminView extends Controller
{
    public function __invoke(Request $req, $page){
        if(!view()->exists("admin/$page/index")){
            return "404";
        }

        if(method_exists($this, $page)){
            return view("admin/$page/index", ['data' => $this->$page($req)]);
        }

        return view("admin/$page/index");
    }

    private function home(){
        $settings = app()->call('App\Http\Controllers\Etc@pageSettings');

        return $settings;
    }
}
