<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThuHienTaiController extends Controller
{
    public function hienThiThu()
    {

        $thu = date('l'); 

        return "Hôm nay là: " . $thu;
    }
}
