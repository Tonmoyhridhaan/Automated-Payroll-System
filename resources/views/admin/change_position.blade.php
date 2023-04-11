<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.includes.head')
</head>
<body>
<div class="container" style="background-color:#98BA7D" >
        <div class="row" >
            <h2 class="mt-3"  style="margin-left:450px" >Update employee positions </h2>
            
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
                   
            <form action="{{URL::to('update-position/'.$employee->id)}}" method="post">
    @csrf
    <h3 class="text-center text -primary"> table</h3>

  
  
  <div class="form-group">
                            
        <div class="col-sm-10">
        
            <label for="sel1">Change position for <b>{{$employee->name}}</b></label>
            <select class="form-control" id="sel1" name="position">

                @foreach($positions as $pos)
                    <option value={{$pos->id}} @if($pos->id == $ap->position_id) selected @endif>{{$pos->name}}</option>
                @endforeach
            </select>

        </div>
    </div>
  
  <button type="submit" class="btn btn-primary ml-3">update</button>
 
  
</form>
        
            </div>
        </div>
    </div>
      

    
  
    </div>
    </div>
</body>
</html>