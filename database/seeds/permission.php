<?php

use Illuminate\Database\Seeder;

class permission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /**
         * 
         *  $table->bigIncrements('id');
         *  $table->string('ipv4');
         *  $table->string('token')->change();
         *  $table->timestamps();
         * 
         * 
         */
        DB::table('permission')->insert(
            [
                "ipv4" => "192.168.0.1",
                "token" => "fapejfpaepfjpojpoajef",
                // "created_at" => date('Y-m-d H:i:s'),
                // "updated_at" => date('Y-m-d H:i:s')
            ]);
    }
}
