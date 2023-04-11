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
        <form action="{{URL::to('employeestore')}}" method="post">
            {{csrf_field()}}
            <div class="col-md-9">
                <div class="card" style="width: 40rem; background-color:white">
                    <form class="form-horizontal" action="{{URL::to('insert-category')}}">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">name</label>
                            <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">email</label>
                            <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="name" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">address</label>
                            <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" id="name" placeholder="Enter address">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="contact no">contact no</label>
                            <div class="col-sm-10">
                            <input type="text" name="contact no" class="form-control" id="name" placeholder="Enter contact no">
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">password</label>
                            <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="name" placeholder="Enter password">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>