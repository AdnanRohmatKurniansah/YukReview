<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function register() {
        return view('auth.register', [
            'title' => "Register"
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'g-recaptcha-response' => 'recaptcha'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);   

        return redirect('/auth/login')->with('toast_success', 'Registration successfully! ');
    }

    public function login() {
        return view('auth.login', [
            'title' => "Login"
        ]);
    }
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
            'g-recaptcha-response' => 'recaptcha'
        ]);
    
        $user = User::where('email', $credentials['email'])->first();
        
        if (!$user) {
            return back()->with('toast_error', 'Login Failed');
        }
    
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
    
            if ($user->role == 'admin') {
                return redirect()->intended('/dashboard')->with('toast_success', 'Login successfully');
            } else {
                return redirect('/')->with('toast_success', 'Login successfully');
            }
    
        }
        return back()->with('toast_error', 'Login Failed');
    }
    
    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
    public function show() {
        return view('auth.update-password');
    }
    public function updatePassword(Request $request) {
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        //match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with('toast_error', "Old Password Doesn't match!");
        }


        //update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('toast_success', "Password Changed Successfuly!");
    }
}
