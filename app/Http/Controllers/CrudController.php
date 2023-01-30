<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    //show data all
    public function showData()
    {
        // all data show
        // $showData = Crud::all();

        // paginate data
        $showData = Crud::paginate(3);
        // print_r($showData);
        return view('show_data', compact('showData'));
        // return $showData;
        // return response()->json([
        //     'message' => $showData
        // ], 401);
    }
    //add data view page
    public function addData()
    {
        return view('add_data');
    }

    public function storeData(Request $req)
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
        $crud =  new Crud();
        $crud->name = $req->name;
        $crud->email = $req->email;
        $crud->save();
        Session::flash('msg', 'data successfully Added');

        return redirect('/');
    }



    public function Update(Request $req, $id)
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
        $crud =  Crud::find($id);
        $crud->name = $req->name;
        $crud->email = $req->email;
        $crud->save();
        Session::flash('msg', 'data successfully Added');

        return redirect('/');
    }

    function delete($id)
    {
        $del = Crud::find($id);
        $del->delete();
        Session::flash('msg', 'data successfully Added');
        return redirect('/');
    }


    function editData($id = null)
    {
        // return $id;
        $editData = Crud::find($id);
        return view('edit_data', compact('editData'));
        // return response()->json([
        //     'message' => $editData
        // ], 401);


    }
}
