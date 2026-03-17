<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    //
    function add(){
        // DB::table('posts') -> insert(
        //     ['title' => 'Post 2', 'content' => 'Content 2', 'user_id' => 1]
        // );

        // $post = new Post();
        // $post->title = 'Laravel Pro 1';
        // $post->content = 'Content Laravel Pro 1';
        // $post->user_id = 1;

        // $post->save();
        // Post::create(
        //     ['title' => 'Post 3', 'content' => 'Content 3', 'user_id' => 1]
        // );

        return view('post.create');
    }
    function store(Request $request){
        // $request -> validate(
        //     [
        //         'title' => 'required|min:5|max:255',
        //         'content' => 'required'
        //     ],
        //     [
        //         'title.required' => 'Tiêu đề không được để trống',
        //         'title.min' => 'Tiêu đề phải có ít nhất 5 ký tự',
        //         'title.max' => 'Tiêu đề không được vượt quá 255 ký tự',
        //         'content.required' => 'Nội dung không được để trống'
        //     ]
        // );
        $input = $request -> all();

        if($request -> hasFile('file')){
            $file = $request -> file('file');
            $filename = time().'_'.$file -> getClientOriginalName();// lấy tên file
            //lấy đuôi file
            echo $file -> getClientOriginalExtension();
            //Lấy kích thước file
            echo $file -> getSize();
            $path= $file -> move(public_path('uploads'), $filename);
            $thumbnail = 'uploads/'.$filename;
            $input['thumbnail'] = $thumbnail;
        }
//         if($request->hasFile('file')){
//     $file = $request->file('file');
//     $filename = time().'.'.$file->getClientOriginalExtension();
//     $file->move(public_path('uploads'), $filename);
//     $input['thumbnail'] = 'uploads/'.$filename;
// } else {
//     dd('Không nhận được file');
// }

        $input['user_id'] = 1;

        Post::create($input);
        // return $request->input();
        // return redirect('post/show');
        return redirect()->route('post.show') -> with('status', 'Thêm bài viết thành công');
    }
    function show(){
        // return redirect()->away('http://google.com');
        // $posts = DB::table('posts') -> select('title', 'content') -> get();
        // // foreach($posts as $post){
        // //     echo $post->content;
        // //     echo "<br>";
        // // }
        // return $posts;
        // $posts = DB::table('posts') -> where('id',1) -> first();
        // $posts = DB::table('posts') -> find(1);

        // echo $posts -> title; 
        // print_r($posts);  
        // $number_posts = DB::table('posts') -> count();
        // echo $number_posts;

        // $posts = DB::table('posts')
        // -> join('users','users.id','=','posts.user_id')
        // -> select('users.name','posts.title')
        // -> get();
        // print_r($posts);
        // return $posts;

        // $post= DB::table('posts')
        // ->where('title','Like', "%iphone%")
        // ->get();
        // $post = DB::table('posts')
        // ->where(
        //     [
        //         ['title','Like', "%iphone%"],
        //         ['content','Like', "%iphone%"]
        //     ]
        // )
        // ->get();

        // $posts = DB::table('posts')
        // ->selectRaw("COUNT(id) as number_posts, user_id")
        // ->groupBy('user_id')
        // ->get();
        // $posts = DB::table('posts')
        // ->orderBy('id','desc')
        // ->get();
        // return $posts;
        // $post = Post::all();
        //Query builder
        // $posts = DB::table('posts') -> paginate(4);//simplePaginate
        $posts = Post::where('id','>',9)->orderby('id','desc') -> paginate(4);
        return view('post.index', compact('posts'));
    }
    function update($id){
        // DB::table('posts') -> where('id',1) -> update(['title' => 'Post 1 Updated']);
        $post = Post::find($id);
        $post->title = 'Laravel Pro 2';
        $post->content = 'Content Laravel Pro 2';
        $post->save();

    }
    function delete(){
        // DB::table('posts') -> where('id',1) -> delete();
        // $post = Post::find(1);
        // $post->delete();
        return Post::destroy([1,2]);
    }

    function read(){
        // $posts = Post::all();
        // return $posts;
        // $posts = Post::find([1,2]);
        // return $posts;

        // $img = Post::find(4)
        // -> featuredImages;
        // return $img;
        $user = Post::find(4)
        -> user;

        $posts = User::find(2)
        -> posts;
        return $posts;
    }
}
