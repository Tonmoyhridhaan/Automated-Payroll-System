<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Session;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function employeedashboard(){
        $id = Session::get('id');
        $employee= Employee::find($id);
        $data=compact('employee');
        return view ('employee')->with($data);;
    } 
    public function editemployee($id){
        $employee= Employee::find($id);
        echo $id;
        if(is_null($employee)){
            return redirect('display_employees');

        }
        else{
            
            $data=compact('employee');
             return view ('employee_update')->with($data);
            

        }
    }
    public function upEmloyee($id,Request $r){
        $employees= Employee::find($id);
        $employees->name=$r['name'];
        $employees->address=$r['address'];
        $employees->email=$r['email'];
        $employees->contact_no=$r['contact'];
        $employees->save();
        return redirect('display_employees');

    }
    public function updatePassword(){
        return view ('employee_pass');
        
    }
    public function uploadImage(){
        return view ('image');
    }
    public function storeImage(Request $r){
       $id = Session::get('id');
       
       $originalImage = $r->file('fileToUpload');
       //dd($originalImage);
       $thumbnailImage = Image::make($originalImage);

       $thumbnailPath = public_path().'/thumbnail/';
       $originalPath = public_path().'/image/';

       //rename image;
       $temp = $originalImage->getClientOriginalName();
       $temp_ext=(explode(".",$temp));
       $ext = end($temp_ext);
       $filename = time().'.'.$ext;

        $thumbnailImage->save($originalPath.$filename);
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.$filename);

        //rename image
        echo $filename;
        $employees= Employee::find($id);
        $employees->image=$filename;

        $employees->save();

    }
}
