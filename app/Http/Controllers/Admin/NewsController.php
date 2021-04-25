<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DB;

class NewsController extends Controller
{
    public function index() {
        $result = DB::table('categories')
            ->get();
        return view('admins.categories', ['categories' => $result]);
        // echo "Main page Admin Panel News";
        // exit;
    }
    
    public function create() {
        echo "Create News";
        exit;
    }
}
