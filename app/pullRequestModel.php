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
}
