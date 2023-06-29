<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserSettings extends Controller {

    public function show () {
        return view('user-settings');
    }
}
