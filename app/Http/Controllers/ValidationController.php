<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ValidationController extends Controller
{
    function formLogin()
    {
        return view('validation.login');
    }

    private $user = [
        'email' => 'user@gmail.com',
        'password' => 'user12345'
    ];

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($request->email === $this->user['email'] && $request->password === $this->user['password']) {
            Session::put('logged_in', true);
            Session::put('user_email', $this->user['email']);

            return view('indexDetail');
        }

    }

    function formRegister()
    {
        return view('validation.register');
    }

    function register(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|string',
            'email' => 'required|min:5|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        return redirect()->route('formLogin')->with('success', 'Pendaftaran Berhasil!');
    }
}
