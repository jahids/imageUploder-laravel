<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentController extends Controller
{
    //get
    public function AllStudent()
    {
        $allData = Student::with('Teacher')->get();
        // print_r($allData);
        // die();
        // return view('student.All_Student', [
        //     'alldata' => $allData
        // ]);

        return response()->json([
            'data' => $allData
        ]);
    }
    //post
    public function AddStudent()
    {
        $showData = Crud::all();
        return view('student.AddStudent', compact('showData'));
    }

    public function storeStudent(Request $req)
    {
        $rules = [
            'name' => 'required',
            'teacher_id' => 'required|numeric|gt:0'
        ];

        $cm = [
            'teacher_id.gt' => "valid teacher select"
        ];

        $this->validate($req, $rules, $cm);
        // list($name, $roll, $class, $teacher_id) = $req->all();
        $data = $req->all();
        // print_r($req->all());
        // die();
        $stdmodel = new Student();
        $stdmodel->name = $req->name;
        $stdmodel->class = $req->class;
        $stdmodel->teacher_id = $req->teacher_id;
        $stdmodel->roll = $req->roll;
        $stdmodel->save();
        Session::flash('msg', 'data successfully Added');
        return redirect('/student');
    }
}
