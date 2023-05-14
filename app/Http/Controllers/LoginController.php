<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginController extends Controller
{

   public function login(){
    return view('login');
   }

   public function loginproses(Request $request){

   $creden = $request->validate([
      'email' => 'required|email:dns',
      'password' => 'required'
      ]);

       if(Auth::attempt($creden)) {
        $request->session()->regenerate();
         
          if (auth()->user()->role == 'admin') {
            return redirect ('admindas');
        } else {
        if (auth()->user()->role == 'user') {
            return redirect('admindas');
       }
         
       }}
       return back()->with('loginError','Login gagal!');
   }

   
   public function logout(Request $request){
     $request->session()->flush();
        return redirect('/');
    }
 
}
