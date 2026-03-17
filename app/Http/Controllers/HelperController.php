<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
class HelperController extends Controller
{
    //
    function url(){
        // //tạo url cơ bản
        // $url = url('login');
        // //Tạo url qua route

        // $url = route('post.show');
        // //Tạo url qua action
        $url = action([PostController::class, 'store']);
        //Lấy current url
        $url = url()->current();
        echo $url;
    }
    function string(){
        $str_1 = "unitop";
        echo Str::length($str_1);
        //In hoa
        echo Str::upper($str_1);
        //In thường
        echo Str::lower($str_1);
        //Random string
        echo Str::random(10);
        // Loại bỏ ký tự dư
        $str_2 = "   Unitop   ";
        echo Str::of($str_2)->trim();
        //slug
        $str_3 = "Đây là một bài viết về Laravel";
        echo Str::slug($str_3);
        //Lay chuoi con
        $str_4 = "Laravel là một framework PHP phổ biến";
        echo Str::substr($str_4, 0, 10);
        //Nối chuỗi vào đuôi
        $str_5 = "Laravel";
        echo Str::of($str_5)->append(' Framework');
        //Tìm kiếm thay thế chuỗi
        $str_6 = "Laravel là một framework PHP phổ biến";
        echo Str::replace('Laravel', 'Symfony', $str_6);
    //Cắt chuỗi với ký tự cho trước
        $str_7 = "Laravel là một framework PHP phổ biến";
        echo Str::limit($str_7, 20);
        //str contain
        $str_8 = "Laravel là một framework PHP phổ biến";
        echo Str::contains($str_8, 'framework') ? 'Có' : 'Không';
        //Str start
    }
}
