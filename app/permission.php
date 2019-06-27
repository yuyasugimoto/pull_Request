<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class permission extends Model
{
    /**
     * 
     */
    public function getIPv4($token){

        $token_id = DB::table('company')->select('id')->where('token','=',$token)->get();

        $permission = DB::table('permission')->select('id','ipv4','created_at')->where('token_id','=',$token_id);

        return $permission;
    }

}
