<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')
</head>
<body>
<div class="container" style="background-color:#98BA7D" >
        <div class="row text-center" >
            <h2 class="text-center">Admin panel</h2>
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
            <form action="" >
    @csrf
    <h3 class="text-center text -primary"> Admin Information</h3>

  
  
  <div class="form-group">
                            
  <div class="form-group">
    <label for="contact"><b> Name:</b>{{$admin->name}}</label>
    
  </div>
  <div class="form-group">
    <label for="contact"><b>Adress:</b></label>
    
  </div>
  <div class="form-group">
    <label for="contact"><b>Email:</b>admin1@gmail.com</label>
   
  </div>
  <div class="form-group">
    <label for="contact"><b>Contact_no:</b>0191678888</label>
    
  </div>
  
  
    </div>
  
 
  
</form>
                  </div>
            
    
</body>
</html>