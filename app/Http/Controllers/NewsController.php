<?php

namespace App\Http\Controllers;

class NewsController extends Controller
{
    public function index() {
      echo "Main page news";
      exit;
    }

    public function card($id) {
      echo "News card {$id}";
    }
}
