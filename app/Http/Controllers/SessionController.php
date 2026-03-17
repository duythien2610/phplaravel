<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function add(Request $request){
        $request->session()->put('username', 'unitop');
        session(['username'=>'phancuongs']);
    }

    function show(Request $request){
        // return $request -> session() -> all();   
        // if($request -> session() -> has('username')){
        //     echo "Đã lưu username vào session";
        // }
        // // return $request -> session() -> get('username');
        // return $request -> session() -> get('status');

        return session('username');
    }
    function add_flash(Request $request){
        $request -> session() -> flash('status', 'Thêm bài viết thành công');
    }

    function delete(Request $request){
        $request -> session() -> forget('username');
        // $request -> session() -> flush(); //Xóa tất cả session
    }
}
