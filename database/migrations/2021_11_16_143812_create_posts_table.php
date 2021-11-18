<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('caption',255);
            $table->text('content');
            $table->text('file')->nullable();
            $table->bigInteger('views')->unsigned()->default(0);
            $table->bigInteger('likes')->unsigned()->default(0);
            $table->bigInteger('dislikes')->unsigned()->default(0);
            $table->bigInteger('user_id')->unsigned();
            // $table->bigInteger('category_id')->unsigned()->nullable();
            // $table->bigInteger('strike_id')->unsigned()->default(0);
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
        Schema::dropIfExists('posts');
    }
}
