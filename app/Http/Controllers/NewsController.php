<?php

namespace App\Http\Controllers;
use App\Models\News;

class NewsController extends Controller
{
  public function index($id) {
    return view('news.news', ['news' => (new News())->getByCategoryId($id)]);
  }

  public function card($id) {
    return view('news.card', ['card' => (new News())->getById($id)]);
  }

  public function categories() {
    return view('news.categories', ['categories' => (new News())->getCategories()]);
  }
}
