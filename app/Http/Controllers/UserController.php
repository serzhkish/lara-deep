<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome() {
        $name = "Алекс";
        echo "Привет, {$name}!";
        exit;
    }
}
