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
            "pullObj" => $model->select(),
            "assign" => $model->getAssign()
        ]);
        
    }

    public function postRequest(Request $request){

        $model = new pullRequestModel();

        $model->assignUpdate($request->input('assign_user'), $request->input('assign_day'), $request->input('request_number'));
    }

    //アサインDBからアサインできる人を取得
    public function getRequest(Request $request){

        $model = new pullRequestModel();

        return json_encode($model->getAssign());
    }

}
