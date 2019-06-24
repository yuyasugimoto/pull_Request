<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pullRequestModel;

class pullRequestController extends Controller
{
    //
    public function index(){

        $model = new pullRequestModel();
        
        return view('pull_request.index',[
            "pullObj" => $model->select()
        ]);
        
    }

}
