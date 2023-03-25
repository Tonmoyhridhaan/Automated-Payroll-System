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
           <input class="text" type="text" name="name" placeholder=" Name" required="">
           <input class="text" type="text" name="address" placeholder=" address" required="">
           <input class="text" type="text" name="city" placeholder=" city" required="">
          
           <input class="text" type="text" name="contact no" placeholder=" mobile" required="">
           <input class="text" type="text" name="degree" placeholder=" degree" required="">
           <input class="text" type="text" name="desigtion" placeholder=" desigtion" required="">
           <input class="text" type="text" name="salary" placeholder=" salary" required="">
           <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="password1" placeholder="Password" required="">
          <input class="text" type="password" name="password2" placeholder="Confirm Password" required="">

          
           
          <div class="wthree-text">
            
            <div class="clear"> </div>
          </div>
          <input type="submit" name="submit" value="add employee">
        </form>
        
      </div>
    </div>

    
                           



    
    <!-- //copyright -->
    
  </div>
  </section>
    
 
</body>
</html>
