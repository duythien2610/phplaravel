@extends('layouts.app')

@section('tiltle', 'Tiêu đề trang con')

@section('content')
    <h1>Đây là nội dung trang con</h1>

    @isset($post_title)
        <p></p>Tiêu đề bài viết: {{ $post_title }}</p>
    @endisset

    @empty($user)
     <p>KHông có dữ liệu user</p>
    @endempty
    <!-- <p>Họ và tên: {!! $data !!}</p> -->
    @if ($data % 2==0)
        <p> {{$data }} Giá trị là số chẵn</p>
    @else
        <p> {{$data }} Giá trị là số lẻ</p>
    @endif
@endsection


@section('sidebar')
    @parent
    <h1>Đây là sidebar trang con</h1>   
@endsection