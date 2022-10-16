<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MasterController extends Controller
{
    // get login
    public function getLogin()
    {
        return view('auth.login');
    }
    // loginAction
    public function loginAction( Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        // dd($data->password);
        if (Auth::attempt($data)) {
           return redirect()->route('dashboard');
        } else {
            return redirect()->back();
        }
        
    }
    // gert fegister
    public function getRegister()
    {
        return view('auth.register');
    }
    // form action
    public function registerAction( Request $request)
    {
        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),

        ]);
        return redirect()->route('login');
    }

    public function logout()
    {
       Auth::logout();
       return redirect()->route('login');

    }
    public function dashboard()
    {
       return view('admin.dashboard');
    }
}
