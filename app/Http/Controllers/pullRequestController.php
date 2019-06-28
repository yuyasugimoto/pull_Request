<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pullRequestModel;

class pullRequestController extends Controller
{
    //


    public function request_task(Request $request){


        $this->validate($request,[
            "token" => "required"
        ]);

        $mode = new \App\pullRequestModel();

        $token = $request->input('token');

        $json = $mode->get_request_task($token);

        return $json;

    }



    // public function index(){

    //     $model = new pullRequestModel();
        
    //     return view('pull_request.index',[
    //         "pullObj" => $model->select(),
    //         "assign" => $model->getAssign()
    //     ]);
        
    // }

    // public function postRequest(Request $request){

    //     $model = new pullRequestModel();

    //     $model->assignUpdate($request->input('assign_user'), $request->input('assign_day'), $request->input('request_number'));
    // }

    // //アサインDBからアサインできる人を取得
    // public function getRequest(Request $request){

    //     $model = new pullRequestModel();

    //     $this->validate($request,[
    //         'token' => "required"
    //     ]);

    //     return json_encode($model->getAssign($request->input('token')));
    // }

    // public function setssing(Request $request){

    //     $model = new pullRequestModel();

    //     $this->validate($request,[
    //         'token' => "required"
    //     ]);

    //     $model->assignUpdate($request->input('update_json'),$request->input('token'));

    // }

    // #putasing
    // public function putassing(Request $request){

    //     $model = new pullRequestModel();

    //     $this->validate($request,[
    //         'token' => "required"
    //     ]);

    //     // var_dump($request->input('put_data'),$request->input('token'));exit;

    //     $model->putassing($request->input('put_data'),$request->input('token'));

        

    // }
}
