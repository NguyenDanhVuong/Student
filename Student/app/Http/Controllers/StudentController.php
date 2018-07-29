<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    public function create(){
    	return view('user.create');
    }

    public function store(Request $request){
    	$allRequest = $request->all();
    	$name = $allRequest['name'];
    	$age = $allRequest['age'];

    	$insertData = array(
    		'name' => $name,
    		'age' => $age,
    	);

    	$student = new student();
    	$student->insert($insertData);

        return redirect()->action('StudentController@index');
    }

    public function index(){
    	$stu = new student();
        $allStudents = $stu->all()->toArray();

        return view('user.list')->with('allStudents', $allStudents);
    }

    public function edit($id){
        $student = new student();
        $editById = $student->find($id)->toArray();

        return view('user.edit')->with('editById', $editById);
    }

    public function update(Request $request){
        $allRequest = $request->all();
        $name = $allRequest['name'];
        $age = $allRequest['age'];
        $id = $allRequest['id'];

        $student = new student();
        $editById = $student->find($id);
        $editById->name = $name;
        $editById->age = $age;
        $editById->save();

        return redirect()->action('StudentController@index');
    }

    public function delete($id){
        student::find($id)->delete();
        return redirect()->action('StudentController@index');
    }
}
