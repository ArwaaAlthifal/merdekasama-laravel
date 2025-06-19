<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Service;
use App\Models\Visi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(){
        $data = [
            'about' => About::first(),
            'service' => Service::limit(4)->get(),
            'content' => 'home/home/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function about(){
        $data = [
            'about' => About::first(),
            'content' => 'home/about/index',
        ];

        return view('home.layouts.wrapper', $data);
    
    }
    function visi(){
        $data = [
            'about' => Visi::first(),
            'content' => 'home/about/index',
        ];

        return view('home.layouts.wrapper', $data);
    }

    function service(){
        $data = [
            'service' => Service::get(),
            'content' => 'home/services/index'
        ];
        return view('home.layouts.wrapper', $data);
    }
}


