<?php

namespace App\Http\Controllers;

use App\Models\Post;
// use App\Models\Comment;
// use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')
            ->paginate(6);
            
        // $categories = Category::all();
        return view('news.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('createPost', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'caption' => 'required',
            // 'category_id' => 'required',
            'file' => 'mimes:jpg,jpeg,png',
        ]);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        if($request->hasFile('file'))
        {
            $folder = date('Y-m-d');
            $path = $request->file('file')->store("uploads/{$folder}", 'public');
            $data['file'] = "/".$path;
        }else{
            $data['file'] = '/img/default.jpg';
        }
        $post = Post::create($data);

        return redirect()->route('news.show', ['id'=>$post->id])->with('success', 'Post added');
    }

    public function update($id, Request $request)
    {

        $request->validate([
            'caption' => 'required',
            'content' => 'required',
            // 'category_id' => 'required',
            'file' => 'mimes:jpg,jpeg,png',
        ]);
        $post = Post::find($id);

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        if($request->hasFile('file'))
        {
            $folder = date('Y-m-d');
            $path = $request->file('file')->store("uploads/{$folder}", 'public');
            $data['file'] = "/".$path;
        }else{
            $data['file'] = $post->file;
        }
        
        $post->update($data);

        return redirect()->route('news.show', $post->caption)->with('success', 'Post updated');
    }

    public function edit($id)
    {
        $post = Post::find($id);

        if(!$post){
            return  redirect()->route('home')->withErrors("Post doesn't exist");
        }
        if($post->user_id !== \Auth::user()->id){
            return  redirect()->route('home')->withErrors('You cannot edit this post');
        }
        // $categories = Category::all();


        return view('news.edit',compact('post'));
    }

    public function show($caption)
    {
        $post = Post::where('caption', $caption)
            ->with('user')
            ->first();
        
        if(!$post)
        {
            return  redirect('/')->withErrors("You're going somewhere wrong");
        }

        return view('news.single', compact('post'));
    }


    public function destroy($id)
    {
        $post = Post::find($id);
        if(!$post)
        {
            return  redirect()->back()->withErrors("you're going somewhere wrong");
        }
        $post->delete();

        return redirect()->back()->with('success', 'Post has been deleted');
    }
    
}
