<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function show($id){
        // return "Đây là thông tin sản phẩm có id là: ". $id;
        $price = 400000;

        $colors =['red', 'blue', 'green'];

        return view('product.show', compact('id', 'price', 'colors')); //Truyền dữ liệu id, price và colors vào view product.show
    }

    function create(){
        // return "Thêm sản phẩm mới";
        return view('product.create');
    }

    function update($id){
        return "Cập nhật sản phẩm có id là: ". $id;
    }
}
