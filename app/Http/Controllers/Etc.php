<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PageSetting;

class Etc extends Controller
{
    public static function pageSettings(){
        $data = PageSetting::all();
        $settings = [];

        for($i = 0; $i < count($data); $i++){
            $settings[$data[$i]["name"]] = $data[$i]["value"];
        }

        return $settings;
    }
}
