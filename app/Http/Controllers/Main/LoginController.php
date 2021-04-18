<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('main.dashboard');
        }
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return response()->json([
                ['type' => 'success', 'message' => 'Login successfully!']
            ]);
        } else {
            return response()->json([
                ['type' => 'error', 'message' => $message]
            ]);
        }
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('main.login');
    }
}
