<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUserPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user_post', function (Blueprint $table) {
            $table->bigIncrements('user_post_id');
            $table->string('user_id');
            $table->string('status_title');
            $table->string('status');
            $table->string('status_city');
            $table->string('status_short_discription');
            $table->string('status_long_discription');
            $table->integer('publication_status');
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
        Schema::dropIfExists('tbl_user_post');
    }
}
