<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        echo "News category";
        exit;
    }

    public function category($id) {
      echo "Category {$id}";
    }
}
