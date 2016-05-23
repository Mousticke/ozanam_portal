<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaiconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up ()
    {
        Schema::create('faicons', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('faicon');
            $table->string('hexaicon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down ()
    {
        Schema::drop('faicons');
    }
}
