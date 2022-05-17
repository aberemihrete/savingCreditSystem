<?php

namespace App\Http\Controllers;
use App\Model\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
   
    public function register(){
        return view('Employee.register');

    }
    public function store(Request $request){
$Employee=new Employee();
$Employee->id = $request->id;
$Employee->Fname=$request->Fname;
$Employee->Lname=$request->Lname;
$Employee->sex=$request->sex;
$Employee->address=$request->address;
$Employee->phone=$request->phone;
$is_saved = $Employee->save();
    if($is_saved){
echo'your data is recored successfully';
}
else{
echo 'some thing wrong try again';
}
}
}
