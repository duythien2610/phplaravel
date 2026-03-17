<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class phplaravel extends Controller
{
    function intenluat(){
        return view('phplaravel.letrantrongluat');
    }

    function intentri(){
        return view('phplaravel.phamminhtri');
    }

    function intenminh(){
        return view('phplaravel.tongbinhminh');
    }

    function intensang(){
        return view('phplaravel.nguyenminhsang');
    }

    function intentrinh(){
        return view('phplaravel.lekieutrinh');
    }
}