<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class permission extends Model
{
    /**
     * 
     */
    public function getIPv4(){

        $company = DB::table('company')->where('id','=',env('COMPANY_ID'))->get();

        $aryCompany = [];
        foreach($company as $cname){
            $aryCompany[] = explode(',',$cname->permission_id);
        }
        $permission = DB::table('permission')
            ->whereIn("id",$aryCompany[0])->get();

        return $permission;
    }

}
