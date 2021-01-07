<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_user', function (Blueprint $table) {
            $table->unsignedBigInteger('genre_id')->nullable();;
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('restrict');
            $table->unsignedBigInteger('user_id')->nullable();;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
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
        Schema::dropIfExists('genre_user');
    }
}
