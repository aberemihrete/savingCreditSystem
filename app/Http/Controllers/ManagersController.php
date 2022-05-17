<?php
namespace App\Http\Controllers;
use App\Models\managers;
use Illuminate\Http\Request;

class ManagersController extends Controller
{
    public function register(){
        return view('managers.register');

    }
    public function store(Request $request){
$managers=new managers();
$managers->id = $request->id;
$managers->Fname=$request->Fname;
$managers->Lname=$request->Lname;
$managers->sex=$request->sex;
$managers->zone=$request->zone;
$managers->woreda=$request->woreda;
$managers->address=$request->address;
$managers->phone=$request->phone;
$is_saved = $managers->save();
    if($is_saved){
echo'your data is recored successfully';
}
else{
echo 'some thing wrong try again';
}
}
public function  get_all()
    {
        $managers = managers::all();
     return view('managers/list', compact('managers'));
    } 
    public function edit($id)
 {
    $managers = managers::find($id);
 return view('managers/edit', compact('managers'));
 }
 public function update(Request $request)
 {
  $request->validate(['name' => 'required']);
$managers= managers::find($request->id);
$managers->Fname=$request->Fname;
$managers->Lname=$request->Lname;
$managers->sex=$request->sex;
$managers->zone=$request->zone;
$managers->woreda=$request->woreda;
$managers->address=$request->address;
$managers->phone=$request->phone;
$managers->save();
    return redirect('managers/list');
    }
    public function delete($id)
 {
managers::where('id', $id)->delete();
 return redirect('managers/list');
   
}

public function search($id)
    {
        $managers = managers::where('id',$id)->first();
     return view('managers/search', compact('managers'));
    } 
  }
