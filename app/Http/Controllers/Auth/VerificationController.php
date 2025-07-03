<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;
use URL;

class VerificationController extends Controller
{
    public function verify($code)
    {
        $user = User::where('verification_token', $code)->first();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Invalid or expired verification code.');
        }

        if ($user->email_verified_at) {
            return redirect()->route('login')->with('success', 'Email already verified.');
        }
        $user->email_verified_at = Carbon::now();
        $user->save();

        return redirect()->route('login')->with('success', 'Your email has been verified!');
    }
}