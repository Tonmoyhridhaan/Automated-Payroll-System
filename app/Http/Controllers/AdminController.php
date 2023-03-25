<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Category;
use App\Models\employeeposition;

class AdminController extends Controller
{
    public function admindashboard(){
        return view ('admin.admin');
    } 
    public function generate_view(){

             $employees=Employee::all();
            $data=compact('employees');
             return view('admin.display_employees')->with($data);
      
             
          }
    public function generatesalary1(){

            $employees=Employee::all();
           $data=compact('employees');
            return view('admin.generate_salary1')->with($data);
     
            
         }

    public function createCategory(){
        return view('admin.create_category');
        

        }
        public function insertCategory(Request $request){
            $name=$request->category;
            
            $amount=$request->amount;
           
            $obj=new Category();
            $obj->name = $name;
            $obj->amount = $amount;
            $obj->status=1;
            if($obj->save()){
                
                return redirect('admin.create-category');
            }
        }
        public function deleteEmployee($id){
            $employees= Employee::find($id);
            echo $id;
             if(!is_null($employees)){
                 $employees->delete();
             }
             return redirect('admin.display_employees');
    
        }
        public function edemployee($id){
                    $employee= Employee::find($id);
                    echo $id;
                    if(is_null($employee)){
                        return redirect('admin.display_employees');
    
                    }
                    else{
                        
                        $data=compact('employee');
                         return view ('admin.employee_update')->with($data);
                        
    
                    }
                }
                public function updateEmloyee($id,Request $r){
                    $employees= Employee::find($id);
                    $employees->name=$r['name'];
                    $employees->address=$r['address'];
                    $employees->email=$r['email'];
                    $employees->contact_no=$r['contact'];
                    $employees->save();
                    return redirect('admin.display_employees');
    
                }
                public function employeeCreate(){
                    return view('admin.add_employee');
                }

                public function employeeStore(Request $request){
                    $name=$request->name;
                    $email=$request->email;
                    $pass=$request->password1;
                    $confirm_pass=$request->password2;
                    $obj=new Employee();
                    $obj->name = $name;
                    $obj->email = $email;
                    $obj->password = $pass;
                    $obj->address = 'ctg';
                    $obj->contact_no = '1234';
                    if($obj->save()){
                        echo "successfully inserted";
                        return redirect('display_employees');
                    }
                } 
                public function employeePosition(){
                    $employees=employeePosition::join('employees','employeepositions.employee_id','employees.id')
                                               ->join ('positions','employeepositions.position_id','positions.id')
                                               ->select('employees.image as image','employees.name as name', 'employees.id as id', 'positions.name as position')
                                               ->get();
                    dd($employees);
                   //return view('admin.employee_position');
                }







}
