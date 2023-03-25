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
            {{ csrf_field() }}
            <div class="col-md-9">
                <div class="card" style="width: 40rem; background-color:white">
                    <form class="form-horizontal" action="{{URL::to('update-password')}}">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">password</label>
                            <div class="col-sm-10">
                            <input type="text" name="category" class="form-control" id="pass1" placeholder="Enter password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">confirm password</label>
                            <div class="col-sm-10">
                            <input type="text" name="category" class="form-control" id="pass2" placeholder="confirm password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            
                  
                  </div>
                  

                  </div>
            
    
</body>
</html>

