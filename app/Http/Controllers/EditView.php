<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditView extends Controller
{
    public function __invoke(Request $req, $page, $content){
        if(!view()->exists("admin/$page/edit/$content")){
            return "404";
        }

        if(method_exists($this, $content)){
            return view("admin/$page/edit/$content", ['data' => $this->$content($req)]);
        }

        return view("admin/$page/edit/$content");
    }
}
