<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function create() 
    {
        return view('register');
    }

    public function store(Request $request) 
    {
        // dd($request->is_admin);
        $request->validate([
            'name' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        Auth::login($user);

        return redirect('/')->with('success', 'You have successfully registered!');
    }

    public function loginForm() 
    {
        return view('login');
    }

    public function login(Request $request) 
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            
            $time = date('H:i:s');
            session()->flash('success', "You logged in under the name: ". Auth::user()->name .", time: $time");
            
            if(Auth::user()->is_admin)
            {
                return redirect()->route('admin');
            } 
            else 
            {
                return redirect('/');
            }
        }
        
        return redirect()->back()->withErrors('Incorrect login or password');
    }

    public function logout(Request $request) 
    {
        Auth::logout();

        return redirect('/')->withErrors('You are logged out');
    }

    public function destroy($id)
    {
        $order = Order::find($id);
        if(!$order)
        {
            return  redirect()->back()->withErrors("you're going somewhere wrong");
        }
        $order->delete();

        return redirect()->back()->with('success', 'Order has been deleted');
    }

    
}
