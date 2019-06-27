<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class permissionController extends Controller
{
    //
    public function index(){

        return \view('config.permission',[]);
    }

    public function ipv4(){
        return \view('config.ipv4',[]);
    }


    public function getipv4(Request $request){
        
    }

}
