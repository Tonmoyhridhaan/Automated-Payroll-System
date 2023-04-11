<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')
</head>
<div class="container" style="background-color:#98BA7D" >
    <div class="row" >
        <h2 class="mt-3"  style="margin-left:450px" >create position</h2>
       
    </div>
    <div class="row mt-2 p-3" style="background-color:#98BA7D">
            <div class="col-md-3">
            @include('admin.includes.sidebar')
            </div>
            
            <div class="col-md-9">
                <div class="card" style="width: 40rem; background-color:white">
                    <form class="form-horizontal" action="{{URL::to('insert-position')}}">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="name">position</label>
                            <div class="col-sm-10">
                            <input type="text" name="position" class="form-control" id="name" placeholder="Enter position">
                            </div>
                        </div>
                        @if(Session::has('err_msg'))
        <div class ="alert alert-danger" role="alert">
            {{Session::get('err_msg')}}
       </div>

       @endif
                        
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