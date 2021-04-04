<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index() {
        echo "Main page Admin Panel News";
        exit;
    }
    
    public function create() {
        echo "Create News";
        exit;
    }
}
