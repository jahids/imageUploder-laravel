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
        $showData = Crud::all();
        return view('show_data', compact('showData'));
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

        return redirect()->back();
    }
}
