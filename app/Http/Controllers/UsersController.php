<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function myFavorites()
    {
        $myFavorites = Auth::user()->favorites;

        return view('users.my_favorites', compact('myFavorites'));
    }
}
