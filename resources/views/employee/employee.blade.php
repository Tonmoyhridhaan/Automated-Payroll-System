<!DOCTYPE html>
<html lang="en">
<head>
@include('employee.includes.head')
</head>
<body>
<div class="container" style="background-color:#98BA7D" >
        <div class="row text-center" >
            <h2 class="text-center">employee dashboard</h2>
        </div>
        <div class="col-md-9" >
        <div class="row-md-3" >
        
</div>   
    </div>
<div class="row mt-2 p-3" style="background-color:#98BA7D">
            <div class="col-md-3">
                @include('employee.includes.sidebar')
            </div>
            <div class="col-md-9">
               <div align="center">
                <img src="{{ URL::to('/') }}/thumbnail/{{$employee->image}}" alt="">
                  <h4><b>Name:</b>{{$employee->name}}</h4>
                  <h4><b>Email</b>{{$employee->email}}</h4>
                  <h4><b>contact_no</b>{{$employee->contact_no}}</h4>
               </div>
                    
                
                    
                  

            </div>
                  

 </div>
            
    
</body>
</html>

