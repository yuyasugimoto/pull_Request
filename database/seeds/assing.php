<?php

use Illuminate\Database\Seeder;

class assing extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
            $table->bigIncrements('id');
            $table->string('staff_name');
            $table->integer('delete_flg');
            $table->timestamps();
        */

        DB::table('assign')->insert(
            [
                "staff_name" => "sugimotoyuya",
                "delete_flg" => 0,
                // "created_at" => date('Y-m-d H:i:s'),
                // "updated_at" => date('Y-m-d H:i:s')
            ]
        );

    }
}
