<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Models\Comment;
// use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index ()
    {
        $posts = Post::orderBy('created_at','desc')
            ->paginate(2);

        return view('index', compact('posts'));
    }
    public function price ()
    {
        return view('price');
    }
    public function contacts ()
    {
        return view('contacts');
    }
}
