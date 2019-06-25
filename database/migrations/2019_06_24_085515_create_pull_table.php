<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePullTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pull_table', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('request_num');
            $table->dateTime('created_at_request');
            $table->string('request_urr',100);
            $table->text('comments');
            $table->text('commit_url');
            $table->text('diffL_url');
            $table->datetime('review_day');
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
        //
    }
}
