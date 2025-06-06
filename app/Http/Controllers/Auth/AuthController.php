<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerifyEmail;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Mail;
use Str;

class AuthController extends Controller
{
    public function login()
    {
        return view('landing.auth.login');
    }

    public function login_form(Request $request)
    {

        // dd($request->all());
        $remember = !empty($request->remember_me) ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            $user = Auth::user();

            if ($user->role === 'Administrator') {
                return redirect()->route('admin.index');
            } elseif ($user->role === 'Staff') {
                return redirect()->route('staff.index');
            } else {
                return redirect()->route('landing.index');
            }
        } else {
            return redirect()->back()->with('error', "Please enter correct email and password");

        }


    }

    public function register()
    {
        return view('landing.auth.register');
    }

    public function register_form(Request $r)
    {

        $r->validate([
            'name' => 'string|required',
            'email' => 'string|required|unique:users,email',
            'mobile' => 'numeric|required',
            'password' => 'string|required|confirmed',
        ]);

        $user = User::create([
            'name' => $r->name,
            'email' => $r->email,
            'verification_token' => Str::uuid(),
            'email_verified_at' => null,
            'mobile' => $r->mobile,
            'password' => Hash::make($r->password),
        ]);

        if ($user) {
            Mail::to($user->email)->send(new VerifyEmail($user->name, $user->verification_token));
            return redirect()->route('auth.confirm-email')->with('success', 'Please confirm email');
        } else {
            return back()->with('error', 'Failed to register, Please try again.');
        }

    }

    public function confirm_email()
    {
        return view('landing.auth.confirm-email');
    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/login');

    }
}