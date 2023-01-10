<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        $user = User::find(1);
        return view ('welcome', compact('user'));
    }
}