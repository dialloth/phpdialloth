<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    function index(){
    	$posts = \App\Post::all(); //get all posts
    	return view('articles', array(
    		'posts'=>$posts));

    }

    public function show($post_name) {
   $post = \App\Post::where('post_name',$post_name)->first(); //get first post with post_nam == $post_name
  
   return view('article',array( //Pass the post to the view
       'post' => $post
   ));
}

}


