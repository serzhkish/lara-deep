<?php

use Illuminate\Database\Seeder;

class news_and_categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        \DB::table('categories')->delete();               
        \DB::table('news')->delete(); 

        for ($i = 1; $i < 10; $i++) {
            \DB::table('categories')
                ->insert($this->generateCategories($i));
            \DB::table('news')
                ->insert($this->generateNews($i)); 
        }
               
    }

    protected function generateCategories($item): array {
        $data = [];
        $data[] = [
            'id_category' => $item,
            'title' => "Test category {$item}",
            'created_at' => date('Y-m-d'),
        ];
        
        return $data;
    }

    protected function generateNews($item): array {
        $data = [];
        $data[] = [
            'id_category' => $item,
            'title' => "Test news {$item}",
            'content' => "Test content {$item}",
            'created_at' => date('Y-m-d'),
        ];
        
        return $data;
    }
}
