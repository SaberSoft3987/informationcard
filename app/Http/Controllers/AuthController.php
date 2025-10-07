<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
     public function showLoginForm()
    {
        return view('auth.login');
    }

 public function store(Request $request) 
    { 
        // dd($request); 
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'password.confirmed' => 'كلمة المرور وتأكيد كلمة المرور غير متطابقين',
        ]);

        // Create the new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect to the home page with a success message
        return redirect()->route('home')->with('success', 'تمت عملية التسجيل بنجاح');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard'); // غير الوجهة حسب مشروعك
        }

        return back()->withErrors([
            'email' => 'بيانات الدخول غير صحيحة.',
        ]);
    }

    public function showRegistrationForm()
    {
        return view('info-etat-civil');

    }
     public function showRegistrationFormdip()
    {
        /////////////////////////////////////////////
        return view('infodiplome');
    }
}
