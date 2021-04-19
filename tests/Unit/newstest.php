<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\News;

class newstest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testNewsModel()
    {
        $model = new News();
        $data = $model->getByCategoryId(1);
        $this->assertIsArray($data);
        $this->assertNotEmpty($data);
        foreach ($data as $item) {
            $this->assertEquals(1, $item['categoryId']);
        }
    }
}
