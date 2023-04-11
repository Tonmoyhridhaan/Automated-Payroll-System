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
                   
            <form action="{{URL::to('update-category/'.$category->id)}}" method="post">
    @csrf
    <h3 class="text-center text -primary"> table</h3>

  
  
  <div class="form-group">
                            
  <div class="form-group">
    <label for="contact">category name</label>
    <input type="text" class="form-control" id="contact" name="name" value="{{$category->name}}">
  </div>
  <div class="form-group">
    <label for="contact">category amount</label>
    <input type="text" class="form-control" id="contact" name="amount" value="{{$category->amount}}">
  </div>
  
  <button type="submit" class="btn btn-primary">update</button>
    </div>
  
 
  
</form>
        
            </div>
        </div>
    </div>
      

    
  
    </div>
    </div>
</body>
</html>