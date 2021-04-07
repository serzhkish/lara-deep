<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    private $news = [
        1 => [
            'id' => '1',
            'title' => 'news 1',
            'content' => 'news 1 content',
            'categoryId' => 1
        ],
        2 => [
            'id' => '2',
            'title' => 'news 2',
            'content' => 'news 2 content',
            'categoryId' => 2
        ]
    ];

    private $categories = [
        1 => 'sport',
        2 => 'heales'
    ];

    public function getById(int $NewsId) {
        return $this->news[$NewsId];
    }

    public function getByCategoryId(int $categoryId) {
        $news = [];

        foreach ($this->news as $id => $item) {
            if ($item['categoryId'] == $categoryId) {
                $news[$id] = $item;
            }
        }

        return $news;
    }

    public function getCategories() {
        return $this->categories;
    }
}
