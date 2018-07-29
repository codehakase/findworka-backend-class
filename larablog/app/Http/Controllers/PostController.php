<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class PostController extends Controller
{

  public function index()
  {
		$posts = Post::all();
    return view('home', compact('posts'));
  }
	
	public function show($id) 
	{
		$post = Post::find($id);
		if ($post) {
			return view('showpost', compact('post'));
		}		
	}

	public function new()
	{
		return view('newpost');
	}

	public function save(Request $request) 
	{
		// create new post model instance
		$post = new Post;
		$post->title = $request->get('title');
		$post->body = $request->get('body');
		$post->category = $request->get('category');
		$post->tags = "";
		$post->user_id = 0;
		$post->save();

		return redirect('/');
	}
	
}
