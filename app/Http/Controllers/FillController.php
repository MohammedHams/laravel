<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    public function redirect($service){
        return Socialite::driver()->redirect();
    }
    public function callback($service){
            return $user = Socialite::with($service)->user();
        }
}
