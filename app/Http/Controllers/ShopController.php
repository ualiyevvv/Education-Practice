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
    public function index(Request $request)
    {
        if($request->category){
            $orders = Order::where('category', $_GET['category'])
                ->orderBy('created_at','desc')
                ->paginate(6);
            return view('shop.index', compact('orders'));
        }
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


        return view('shop.edit',compact('order'));
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



    
}
