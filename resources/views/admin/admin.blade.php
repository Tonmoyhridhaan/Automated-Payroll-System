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
            {{ csrf_field() }}
                
                                    
                    <table class="table">
                    
                    <thead>
                      <tr>
                        <th>name</th>
                        <th>Email</th>
                        <th>Location</th>
                      </tr>
                    </thead>
                    
                  </table>
                  
                  </div>
                  

                  </div>
            
    
</body>
</html>