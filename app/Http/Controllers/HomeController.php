<?php

namespace blog\Http\Controllers;

use blog\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getindex()
    {
      $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('pages.index',[
          'posts' => $posts
        ]);
    }
}
