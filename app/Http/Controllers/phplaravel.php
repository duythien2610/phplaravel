<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function danhSachTheLoai(){
        $theLoai = DB::table('genre')->get();
        return view('phplaravel.the_loai', compact('theLoai'));
    function intensang(){
        return view('phplaravel.nguyenminhsang');
    }

    function intentrinh(){
        return view('phplaravel.lekieutrinh');
    }
}