<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        $value = $request->session()->get('key');

        if (Auth::attempt($credentials)) {
            return redirect('profile');
        }

        return redirect('login')->with('success', 'Login details are not valid');

    }

    function profile()
    {
        if (Auth::check()) {
            return view('profile');
        }

        return redirect('login')->with('success', 'Your session has timed out.');
    }

      /**
      * Check user session.
      **/

//    public function checkSession()
//    {
//        return Response()->json(['user' => Auth::user()]);
//    }
//
//    public function __construct()
//    {
//        $this->middleware('user', ['except' => ['login', 'checkSession']]);
//    }

}
