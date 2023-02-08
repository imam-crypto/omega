<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function RedirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }



    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            if ($user != null) {
                \auth()->login($user, true);
                return redirect()->route('/');
            } else {
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now()
                ]);


                \auth()->login($create, true);
                return redirect()->route('home');
            }
        } catch (\Exception $e) {
            return redirect()->route('login');
        }
    }

    public function handleGoogleCallback()
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            // dd($user_google);
            $user           = User::where('email', $user_google->getEmail())->first();

            if ($user != null) {
                \auth()->login($user, true);
                return redirect()->route('new.index');
            } else {
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now(),
                    'google_id' => $user_google->id,
                ]);


                \auth()->login($create, true);
                return redirect()->route('new.index');
            }
        } catch (\Exception $e) {
            return redirect()->route('new.index');
        }
    }
}
