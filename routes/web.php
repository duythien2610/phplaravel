<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\ThuHienTaiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FeaturedImagesController;
use App\Models\Post;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CookieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// //Các dạng định tuyến cơ bản
// Route::get('/post',function(){
//     return 'Đây là trang post';
// });
// Route::get('/admin/product', function(){
//     return 'Đây là trang admin product';
// });


// //Định tuyến có tham số

// Route::get('/posts/{id}',function($id){
//     return 'Đây là trang post có id là: '.$id;
// });

// Route::get('posts/{cat_id}/page/{page}', function($cat_id, $page){
//     return 'Đây là trang post có cat_id là: '.$cat_id.' và page là: '.$page;
// });

// //Đặt tên cho định tuyến
// Route::get('users/profile',function(){ 
//     return route('profile');//Trả về đường dẫn của route có tên là profile

// }) ->name('profile');

// Route::get('/admin/product/add', function(){
//     return route('product.add');//Trả về đường dẫn của route có tên là product.add
// }) ->name('product.add');

// //Định tuyến có tham số tùy chọn
// Route::get('users/{id?}',function($id = 0){
//     return $id;
// });

// //Định nghĩa tham số có ràng buộc biểu thức chính quy
// // route::get('product/{id}',function($id){
// //     return $id;
// // })->where('id','[0-9]+');//Ràng buộc id phải là số

// Route::get('product/{slug}/{id}',function($slug, $id){
//     return $id. '-'.$slug;
// })->where(['id'=>'[0-9]+', 'slug' => '[a-zA-Z0-9\-]+']);//Ràng buộc id phải là số

// //Định tuyến qua một view

// Route::view('/welcome', 'welcome'); //Trả về view welcome khi truy cập vào đường dẫn /welcome

// Route::view('/post','post', ['name'=>'Laravel']); //Trả về view post và truyền biến name có giá trị là Laravel khi truy cập vào đường dẫn /post

//Định tuyến qua một controller

// Route::get('/post/{id}', [PostController::class, 'detail']); //Truy cập vào phương thức detail của PostController khi truy cập vào đường dẫn /post/{id}, action la detail

// Route::get('product/show/{id}',[ProductController::class,'show']);

// Route::get('product/create',[ProductController::class,'create']);
// Route::get('product/update/{id}',[ProductController::class,'update']);

// //Định tuyến controller qua resource

// // Route::resource('post', PostController::class); //Tạo ra các route cho các phương thức index, create, store, show, edit, update, destroy của PostController


// // Route::get('post/index', [PostController::class, 'index']);

// Route::get('admin/post/show',[AdminPostController::class, 'show']);



// Route::get('child', function(){
//     return view('child');
// });
Route::get('admin/post/show',[AdminPostController::class, 'show']);
Route::get('admin/post/add',[AdminPostController::class, 'add']);
Route::get('admin/post/update/{id}',[AdminPostController::class, 'update']);
Route::get('admin/post/delete/{id}',[AdminPostController::class, 'delete']);

Route::get('child', function(){
    return view('child', ['data' => 4, 'post_title' => 'Khóa học hay']); //Truyền dữ liệu data và post_title vào view child
});

Route::get('demo',function(){
    $users = array(
        1 => array('name' => 'Nguyen Van A'),
        2 => array('name' => 'Nguyen Van B'),
    );
    return view('demo', compact('users')); //Truyền biến user vào view demo
});

//
// Route::get('admin/post/add',function(){
//     return "Admin: Thêm bài viết";
// });

// Route::get('admin/post/update/{id}',function($id){
//     return "Admin: Sửa bài viết có id là: ".$id;
// });

// Route::get('admin/post/show',function($id){
//     return "Admin: Hiển thị danh sách";
// }); 
// Route::get('admin/post/delete/{id}',function($id){
//     return "Admin: Xóa bài viết có id là: ".$id;
// });


Route::get('/user/insert',function(){
    DB::table('users') -> insert([
        'name' => 'Nguyen Van A',
        'email' => 'vancuong@gmail.com',
        'password' => bcrypt('admin')]);
});

// Route::get('post/add', [PostController::class,'add']);
// Route::get('post/show', [PostController::class,'show']);
// Route::get('post/update/{id}', [PostController::class,'update']);

// //ELOQUENT ORM
// // Route::get('posts/read',function(){
// //     $posts = Post::all(); //Lấy tất cả các bản ghi trong bảng posts
// //     return $posts;
// // });

// Route::get('posts/read', [PostController::class,'read']);

// Route::get('images/read', [FeaturedImagesController::class,'read']);
// Route::get('roles/show', [RoleController::class,'show']);

//FORM
Route::get('post/add', [PostController::class,'add']); //Hiển thị form thêm bài viết

Route::post('post/store', [PostController::class,'store']); //Xử lý dữ liệu từ form và lưu vào cơ sở dữ liệu

Route::get('post/show', [PostController::class,'show'])->name('post.show'); //Xử lý dữ liệu từ form và lưu vào cơ sở dữ liệu

Route::get('helper/url', [HelperController::class,'url']); //Sử dụng các hàm trợ giúp liên quan đến URL

Route::get('session/add', [SessionController::class,'add']);
Route::get('session/show', [SessionController::class,'show']);

Route::get('session/add_flash', [SessionController::class,'add_flash']);

Route::get('session/delete', [SessionController::class,'delete']);

Route::get('cookie/set', [CookieController::class,'set']);
Route::get('cookie/get', [CookieController::class,'get']);