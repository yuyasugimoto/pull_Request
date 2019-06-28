<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Task extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('task', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('team_id');
            $table->string('task_name');
            $table->datetime('deadline');
            $table->string('directer');
            $table->string('progress');
            $table->string('company_code');
            $table->integer('days');
            $table->string('flg');
            $table->timestamps();
        });

        #insert into task value(null,1,'test01',"2019-07-04","DirectoryName","未着手","1",18,0,Now(),Now());
        #insert into task value(null,1,'test02',"2019-07-04","DirectoryName","未着手","1",18,0,Now(),Now());
        #insert into task value(null,1,'test03',"2019-07-04","DirectoryName","未着手","1",18,0,Now(),Now());
        #insert into task value(null,1,'test04',"2019-07-04","DirectoryName","未着手","1",18,0,Now(),Now());


        Schema::create('human', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_name');
            $table->integer('team_id');
            $table->string('company_code');
            $table->string('flg');
            $table->timestamps();
        });



        #insert into human value(null,'杉本ゆうや',1,'1','0',Now(),Now());
        #insert into human value(null,'UserName',1,'1','0',Now(),Now());
        #insert into human value(null,'UserName02',1,'1','0',Now(),Now());
        #insert into human value(null,'UserName03',1,'1','0',Now(),Now());


        Schema::create('schedule', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('staff_name');
            $table->integer('task_id');
            $table->integer('days');
            $table->integer('assing_day');
            $table->string('flg');
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
