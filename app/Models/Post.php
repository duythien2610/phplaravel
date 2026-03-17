<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // protected $table = 'posts'; //Tên bảng trong cơ sở dữ liệu
    protected $fillable = ['title', 'content', 'user_id', 'thumbnail']; //Các trường có thể gán hàng loạt

    function featuredImages(){
        return $this -> hasOne('App\Models\FeaturedImages');
    }
    function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
