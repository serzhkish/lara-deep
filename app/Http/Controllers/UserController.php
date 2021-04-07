<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function welcome() {
        $name = (new User())->getname();
        return view('welcome', ['userName' => $name]);
    }
}
