<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable()->change();
            $table->foreign('category_id')->references('id')->on('nowtel_categories')->onDelete('cascade');
            $table->unsignedBigInteger('title_id')->nullable()->change();
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->unsignedBigInteger('image_id')->nullable()->change();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->integer('user_id')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->integer('title_id')->nullable()->change();
            $table->integer('image_id')->nullable()->change();
        });
    }
};
