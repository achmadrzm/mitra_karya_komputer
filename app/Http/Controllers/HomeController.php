<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index () {
        if (Auth::user()->usertype == 'user') {
            return view('home');
        } else {
            return view('welcome');
        }
        // $p = Auth::user()->usertype;

        // dd($p);
    }
}
