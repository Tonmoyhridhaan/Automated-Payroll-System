<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.includes.head')
</head>
<body>
<div class="container" style="background-color:#98BA7D" >
        <div class="row" >
            <h2 class="mt-3"  style="margin-left:450px" >All employee list</h2>
            
        </div>
        <div class="col-md-9" >
        <div class="row-md-3" >
        
     </div>   
    </div>
    <div class="row mt-2 p-3" style="background-color:#98BA7D">
            <div class="col-md-3">
            @include('admin.includes.sidebar')
            </div>
            <div class="col-md-9">
            <table class="table">
        
        <tbody>
        <thead>
                      <tr>
                        <th>image</th>
                        <th>name</th>
                        <th>address</th>
                        <th>email</th>
                        <th>contact_no</th>
                        <th>action</th>

                      </tr>
                    </thead>

            @foreach($employees as $employee)
            
            <tr>

                <td> <img src="{{ URL::to('/') }}/thumbnail/{{$employee->image}}"  width="60" height="50" alt=""> </td>
                
                <td>{{$employee->name}} </td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->contact_no}}</td>
               
                
  <td><button type="button" class="btn btn-success"> <a href ="{{URL::to('employee-edit/'.$employee->id)}}"><b>Edit</b></button>             
                      
  <button type="button" class="btn btn-danger"> <a href ="{{URL::to('employee-delete/'.$employee->id)}}"><b>Delete</b></button></td>
  </tr>   
            @endforeach
            
            
        </tbody>
      </table>
      <button type="button" class="btn btn-green"> <a href ="{{URL::to('generate-pdf2/')}}"><b> pdf generate</b></button></td>
            </div>
        </div>
    </div>
      

    
  
    </div>
    </div>
</body>
</html>