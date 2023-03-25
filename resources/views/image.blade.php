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
            <form action="{{URL::to('store-image')}}" method="post" enctype="multipart/form-data">
    @csrf                
            Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Image" name="submit">
                    </form>
                  

                  </div>
                  

                  </div>
            
    
</body>
</html>

