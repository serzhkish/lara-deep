<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsAndCategoriesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id_category');
            $table->string('title', 50);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id_news');
            $table->unsignedBigInteger('id_category');
            $table->foreign('id_category')
                ->references('id_category')
                ->on('categories')
                ->onDelete('cascade');
            $table->string('title', 50);
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
        Schema::dropIfExists('categories');
    }
}
