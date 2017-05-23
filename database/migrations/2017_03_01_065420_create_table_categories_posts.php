<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCategoriesPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_post', function (Blueprint $table) {
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('category_id')->on('categories')->onDelete('cascade');

            $table->integer('post_id')->unsigned()->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_post');
    }
}
