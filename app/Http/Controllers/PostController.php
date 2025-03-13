<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use宣言は外部にあるクラスをGuitarController内にインポートできる。
//この場合、App\Models内のGuitarクラスをインポートしている。
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post) //インポートしたGuitarをインスタンス化して$guitarとして使用。
    {
        return $post->get(); //$guitarの中身を戻り値にする。
    }
}
