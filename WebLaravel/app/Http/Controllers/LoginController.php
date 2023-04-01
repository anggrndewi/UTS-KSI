<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Login;

use Illuminate\Support\Facades\Auth;

use Session;

class LoginController extends Controller
{

    public function Sigup()
    {
        return view("index");
    }

    public function Daftar(Request $request)
    {
        $Sigup = new Login;
        $Sigup ->name = $request->name;
        $Sigup ->email = $request->email;
        $Sigup ->password = $request->pass;
        $Sigup ->repeatpassword = $request->re_pass;
        $Sigup->save();
        return redirect('Login');
    }

    public function index()
    {
        return view('index2', [
            'title' => 'Login'
        ]);
    }
 
    public function authenticate(Request $request)
    {
        // $credentials = $request->validate([
        //     'email' => ['required', 'email:dns'],
        //     'password' => ['required']
        // ]);
 
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/Beranda');
        // }
 
        // return back()->with('loginError', 'Login failed');

        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required',
        // ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('berita')
                        ->withSuccess('Signed in');
        }
        else {
            return view("index");
        }
  
       
    }
 
    public function logout(Request $request)
    {
        Auth::logout();
 
        request()->session()->invalidate();
 
        request()->session()->regenerateToken();
 
        return redirect('/Login');
    }
}
