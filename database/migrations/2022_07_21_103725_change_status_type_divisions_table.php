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
        Schema::table('divisions', function (Blueprint $table) {
            $table->unsignedBigInteger('title_id')->nullable()->change();
            $table->foreign('title_id')->references('id')->on('titles')->onDelete('cascade');
            $table->unsignedBigInteger('small_title_id')->nullable()->change();
            $table->foreign('small_title_id')->references('id')->on('small_titles')->onDelete('cascade');
            $table->unsignedBigInteger('image_id')->nullable()->change();
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->unsignedBigInteger('paragraph_id')->nullable()->change();
            $table->foreign('paragraph_id')->references('id')->on('paragraphs')->onDelete('cascade');
            $table->unsignedBigInteger('button_id')->nullable()->change();
            $table->foreign('button_id')->references('id')->on('buttons')->onDelete('cascade');
            $table->unsignedBigInteger('lien_id')->nullable()->change();
            $table->foreign('lien_id')->references('id')->on('liens')->onDelete('cascade');
            $table->unsignedBigInteger('section_id')->change();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('divisions', function (Blueprint $table) {
            $table->integer('title_id')->nullable()->change();
            $table->integer('small_title_id')->nullable()->change();
            $table->integer('image_id')->nullable()->change();
            $table->integer('paragraph_id')->nullable()->change();
            $table->integer('button_id')->nullable()->change();
            $table->integer('lien_id')->nullable()->change();
            $table->integer('section_id')->change();
        });
    }
};
