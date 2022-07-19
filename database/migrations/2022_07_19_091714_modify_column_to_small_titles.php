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
        Schema::table('small_titles', function (Blueprint $table) {
            $table->renameColumn('content', 'small_title_content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('small_titles', function (Blueprint $table) {
            $table->renameColumn('small_title_content', 'content');
        });
    }
};
