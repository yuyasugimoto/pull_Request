<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pullRequestModel extends Model
{


    public function get_request_task($token){
        $data = DB::table('task')->select('task.id','team.team_name','task.task_name','task.deadline','task.directer','task.progress','task.days','task.flg')
        ->leftjoin('team','task.team_Id',"=","team.id")
        ->where('task.company_code',"=",$token)
        ->get();

        return json_encode($data);
    }

    //
    // public function select(){
    //     $table = DB::table('pull_table')->get();

    //     return $table;
    // }

    // public function getAssign($token){

    //     $token_id = DB::table('company')->select('id')->where('token','=',$token)->get();

    //     // $permission = DB::table('permission')->select('id','ipv4','created_at')->where('token_id','=',$token_id);

    //     $table = DB::table('assign')->select('id','staff_name','created_at','updated_at')->where('token_id','=',(string)$token_id[0]->id)->get();

    //     return $table;
    // }

    // public function assignUpdate($json,$token){

    //     #insert into pull_table  value(Null,999,'2019-06-25','sugimotoyuya','sugimotoyuya','0','https://pull.novizio.net','https://pull.novizio.ne','2019-06-25',Now(),Now());
    //     #into assign value(null,'morimotomarie','0',Now(),Now());

    //     $token_id = DB::table('company')->select('id')->where('token','=',$token)->get();


    //     $update_date = json_decode($json);

        

    //     foreach ($update_date as $key => $value) {
    //             DB::update('update assign set staff_name = ?, updated_at = Now() where id = ? and token_id = ?', [
    //                 $value->update_value, $value->key, $token_id[0]->id
    //             ]);
    //     }

    // }


    // public function putAssing($put_data,$token){

    //     #insert into pull_table  value(Null,999,'2019-06-25','sugimotoyuya','sugimotoyuya','0','https://pull.novizio.net','https://pull.novizio.ne','2019-06-25',Now(),Now());
    //     #into assign value(null,'morimotomarie','0',Now(),Now());
    //     $token_id = DB::table('company')->select('id')->where('token','=',$token)->get();

    //     // var_dump($token_id[0]->id);exit;
        
    //     DB::insert('insert into assign (staff_name, delete_flg, token_id, created_at, updated_at) values (?, ?, ?, ?, ?)', [$put_data, 0,$token_id[0]->id,date('y-m-d'),date('y-m-d')]);
        

    // }

}
