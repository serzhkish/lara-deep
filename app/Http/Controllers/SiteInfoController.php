<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteInfoController extends Controller
{
    public function index(Request $request) {
        // get
        return view('about');
    }

    public function save() {
        // post
        // save data
        return redirect()->route('site::about');
    }
}
