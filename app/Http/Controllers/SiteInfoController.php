<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    public function index() {
        return view('about');
    }
}
