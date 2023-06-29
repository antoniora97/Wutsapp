<?php

namespace App\Http\Controllers;

use App\Models\User;

class Main extends Controller
{
    public function show () {
        $user = User::find(1);
        return view('main', compact('user'));
    }
}
