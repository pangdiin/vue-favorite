<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use App\User;
use App\Favorite;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
    	$posts = Post::paginate(5);

    	return view('posts.index', compact('posts'));
    }

    public function favoritePost(Post $post)
    {
    	Auth::user()->favorites()->attach($post->id);

    	return back();
    }

    public function unFavoritePost(Post $post)
    {
    	Auth::user()->favorites()->detacht($post->id);

    	return back();
    }

   
}
