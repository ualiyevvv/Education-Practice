<?php

namespace App\Http\Controllers;

use App\Models\Order;
// use App\Models\Comment;
// use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $orders = Order::orderBy('created_at','desc')
            ->paginate(6);
            
        // $categories = Category::all();
        return view('shop.index', compact('orders'));
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
            'description' => 'required',
            'category' => 'required',
            'maker' => 'required',
            'price' => 'required|integer',
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
        $order = Order::create($data);

        return redirect()->route('shop.show', ['category'=>"$order->category",'caption'=>"$order->caption"])->with('success', 'Order added');
    }

    public function update($id, Request $request)
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
        
        $order = Order::find($id);
        $order->update($data);

        return redirect()->route('shop.show', ['category'=>"$order->category",'caption'=>"$order->caption"])->with('success', 'Order updated');
    }

    public function edit($id)
    {
        $order = Order::find($id);

        if(!$order){
            return  redirect()->route('home')->withErrors("Order doesn't exist");
        }
        if($order->user_id !== \Auth::user()->id){
            return  redirect()->route('home')->withErrors('You cannot edit this order');
        }
        $categories = Category::all();


        return view('editPost',compact('order','categories'));
    }

    public function show($category, $caption)
    {
        $order = Order::where('category', $category)
            ->where('caption', $caption)
            ->first();
        
        if(!$order)
        {
            return  redirect('/')->withErrors("You're going somewhere wrong");
        }

        return view('shop.single', compact('order'));
    }

    public function like($id)
    {
        $order = Order::find($id);
        if ($order->id)
        {
            $order->increment('likes');
            return redirect()->route('shop.show',['id'=>$id])->with('success', 'Видео likes');
        }
        else
        {
            return  redirect()->back()->withErrors('Вы куда-то не туда');
        }
    }

    public function dislike($id)
    {
        $order = Order::find($id);
        if ($order->id)
        {
            $order->increment('dislikes');
            return redirect()->route('shop.show',['id'=>$id])->with('success', 'Видео dislikes');
        }
        else
        {
            return  redirect()->back()->withErrors('Вы куда-то не туда');
        }
    }


    
}
