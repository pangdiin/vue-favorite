<?php

namespace App;


use Auth;
use App\Favorite;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function favorited()
    {
    	return (bool) Favorite::where('user_id', Auth::id())
    							->where('post_id', $this->id)
    							->first();
    }
}
