<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class ProfileController extends Controller
{

    function __construct()
    {
        //$this->middleware('auth')->only('index');
    }

    //
    public function index() {
        return view('profile', [
            'user' => Auth::user()
        ]);
    }

    public function byId($id) {
        $user = 0;

        if($id == Auth::id()){
            $user = Auth::user();
        } else {
            $user = User::find($id);
        }

        return view('profile', [
            'user' => $user
        ]);
    }
}
