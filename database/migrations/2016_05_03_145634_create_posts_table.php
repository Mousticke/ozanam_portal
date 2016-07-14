<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('titre');
            $table->string('files_id');
            $table->string('links_id');
            $table->text('body');
            $table->string('color');
            $table->string('facebook_post');
            $table->string('twitter_post');
            $table->string('google_post');
            $table->integer('user_id');
            $table->string('image_actu');
            $table->date('publish_at');
            $table->date('delete_at');
            $table->integer('groupe_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::drop('posts');
    }
}
