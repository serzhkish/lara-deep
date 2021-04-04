<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index() {
        echo "Main page Admin Panel Category";
        exit;
    }

    public function create() {
        echo "Create Category";
        exit;
    }
}
