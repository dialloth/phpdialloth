<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
    $posts =\App\Post::orderBy('post_date', 'desc')->take(3)->get();
    	return view('welcome', array(
'posts'=>$posts
    ));

    }

   public function show($post_name) {
   $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
  
   return view('article',array( //Pass the post to the view
       'post' => $post
   ));

    }
}





