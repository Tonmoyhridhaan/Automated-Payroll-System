
  <!DOCTYPE html>
  <html>
  <head>
  <title>Creative Colorlib SignUp Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Custom Theme files -->
  <link href="g.css" rel="stylesheet" type="text/css" media="all" />
  <!-- //Custom Theme files -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
  <!-- //web font -->
  <link rel="stylesheet" href="{{asset('css/g.css')}}">
  </head>
  <body>
  <!-- main -->
  <div class="main-w3layouts wrapper">
    <h1> Signup Form</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        
        <form id="signup-form" class="form" action="{{URL::to('employeestore')}}" method="post">
          {{csrf_field()}}
           <input class="text" type="text" name="name" placeholder=" Name" required="">
          <input class="text email" type="email" name="email" placeholder="Email" required="">
                    <input class="text" type="password" name="password1" placeholder="Password" required="">
          <input class="text" type="password" name="password2" placeholder="Confirm Password" required="">
           
          <div class="wthree-text">
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>I Agree To The Terms & Conditions</span>
            </label>
            <div class="clear"> </div>
          </div>
          <input type="submit" name="submit" value="signup">
        </form>
        
        <p> already have an Account? <a href="{{URL::to('login')}}"> log in now!</a></p>
      </div>
    </div>

    
                           



    
    <!-- //copyright -->
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  </section>
    <script src="signup.js"></script>
 
</body>
</html>