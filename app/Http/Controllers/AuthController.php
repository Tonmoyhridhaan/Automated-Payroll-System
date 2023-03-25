<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Admin;
use Session;

class AuthController extends Controller
{
    public function template(){
        return view('template'); 
    }
    public function login(){
        return view('login'); 
    }
    public function signup(){
        return view('signup'); 
    }
    
    public function loginstore(Request $request){
        $email=$request->email;
        $password=$request->password;
       
         $employee=Employee::where('email','=',$email)
             ->where('password','=',$password)
             ->first();
         if(!$employee){
            $admin=Admin::where('email','=',$email)
            ->where('password','=',$password)
            ->first();
            if(!$admin){
                return redirect()->back()->with('err_msg','Invalid msg');
             }  
             else{
                $request->session()->put('email',$admin->email);
                $request->session()->put('role','admin');
                $request->session()->put('id',$admin->id);
                 return redirect()->to('admin') ;
             }
         }  
         else{
            $request->session()->put('email',$employee->email);
            $request->session()->put('role','employee');
            $request->session()->put('id',$employee->id);
             return redirect()->to('employee') ;
                                               
         } 
}
        
    public function admindashboard(){
        return view ('admin');
    } 

    
    
    public function logout(){
            Session::forget('email');
            Session::forget('role');
            return redirect('login');
    }
    

}
