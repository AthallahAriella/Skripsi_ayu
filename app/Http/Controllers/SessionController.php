<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
       return view('user.login');
    }


    function login(Request $request)

    {
        Session::flash('email', $request->email);
        Session::flash('role', $request->role);
        $request->validate([
            'email' => 'required|',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password wajib diisi',
            'email.password.requiered' => 'email dan password harus diisi',

        ]);
    
        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,

        ];

        if(Auth::attempt($infologin)){
            return redirect('menu')->with('succes', 'Berhasil login');
            
        }else{
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        
        }

    }

    function register()
    {
         return view('user.register');
    }
    function create(Request $request)
    {
        Session::flash('name', $request->name);
       
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ], [
            'name.required' => 'Nama Wajib Diisi',
            'email.email' => 'Email harus berformat valid',
            'email.unique' => 'Email sudah digunakan, gunakan email lain',
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password harus memiliki minimal 6 karakter',
        ]);
        

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];
        User::create($data);
    
        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
            

        ];

        if(Auth::attempt($infologin)){
            return redirect('menu')->with('succes', 'Berhasil login');
            
        }else{
            return redirect('login')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
        
        }
    }
}
