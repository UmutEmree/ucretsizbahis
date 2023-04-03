<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('category_id')->unsigned();
            $table->integer('type');
            $table->string('link');
            $table->integer('view');
            $table->text('text');
            $table->text('bonus');
            $table->string('image');
            $table->date('date');
            $table->timestamps();

          $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
