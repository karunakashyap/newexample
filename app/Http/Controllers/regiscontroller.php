<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user_login;
use Illuminate\Support\Facades\Hash;

class regiscontroller extends Controller
{
    //
   public function index(){
    return view('register');
   }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|regex:/^[a-zA-Z]+$/u',
        'email' => 'required|email',
        'password'=>'required|min:8|max:255',
        
    ]);
    echo '<pre>';
    print_r($request->all());
 
}

public function take(Request $request){
    $user_login = new user_login();
    
    $user_login->name = $request->input('name');
    $user_login->email = $request->input('email');
    $user_login->password =Hash::make($request->input('password'));
    $user_login->save();
}
}
