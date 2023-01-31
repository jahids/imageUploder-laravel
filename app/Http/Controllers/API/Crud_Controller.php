<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Crud;
use Illuminate\Http\Request;

class Crud_Controller extends Controller
{
    //rest api

    public function showData()
    {
        // all data show
        // $showData = Crud::all();

        // paginate data

        // print_r($showData);
        // return view('show_data', compact('showData'));
        // return $showData;
        $showData = Crud::paginate(3);
        return response()->json([
            'message' => "successs",
            "data" => $showData
        ], 401);
    }


    public function storeData(Request $req)
    {
        // print_r('jo');
        // die();
        $rules = [
            'name' => 'required| max:10',
            'email' => 'required|email',
        ];

        $cm = [
            'name.requrired' => "enter your name",
            'email.requrired' => "enter your email",
            'name.max' => 'you name can not contain more than 10 ch',
            'email.max' => 'you name can not contain more than 10 ch',
        ];

        $this->validate($req, $rules, $cm);
        $crud =  new Crud();
        $crud->name = $req->name;
        $crud->email = $req->email;
        $crud->save();
        return response()->json([
            'message' => "successs",
            "data" => $crud
        ], 401);
    }



    public function Update(Request $req)
    {
        $rules = [
            'name' => 'required| max:10',
            'email' => 'required|email',
        ];

        $cm = [
            'name.requrired' => "enter your name",
            'email.requrired' => "enter your email",
            'name.max' => 'you name can not contain more than 10 ch',
            'email.max' => 'you name can not contain more than 10 ch',
        ];
        $this->validate($req, $rules, $cm);
        $crud =  Crud::find($req->id);
        $crud->name = $req->name;
        $crud->email = $req->email;
        $crud->save();

        return response()->json([
            'message' => "successs",
            "data" => $crud
        ], 401);
    }

    function delete($id)
    {


        $del = Crud::find($id);
        if ($del) {
            $del->delete();
        } else {
            return response()->json([
                'message' => "data not found",
            ], 400);
        }

        return response()->json([
            'message' => "successs",
            "data" => $del
        ], 401);
    }
}
