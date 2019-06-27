<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pullRequestModel extends Model
{
    //
    public function select(){
        $table = DB::table('pull_table')->get();

        return $table;
    }

    public function getAssign(){
        $table = DB::table('assign')->select('id','staff_name','created_at','updated_at')->get();

        return $table;
    }

    public function assignUpdate($assign_user, $assign_day, $request_number){

        #insert into pull_table  value(Null,999,'2019-06-25','sugimotoyuya','sugimotoyuya','0','https://pull.novizio.net','https://pull.novizio.ne','2019-06-25',Now(),Now());
        #into assign value(null,'morimotomarie','0',Now(),Now());

        $rf = DB::update('update pull_table set assing_user = ?,review_day = ?,updated_at = Now() where request_num = ?', [$assign_user, $assign_day, $request_number]);

        return $rf;
        

    }

}
