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
                   
            <form action="{{URL::to('position-updated/'.$position->id)}}" method="post">
    @csrf
    <h3 class="text-center text -primary"> table</h3>

  
  
 
                            
  <div class="form-group">
    <label for="contact">position name</label>
    <input type="text" class="form-control" id="contact" name="name" value="{{$position->name}}">
  </div>
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>Choose categories</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="dynamic">

        <tr>
            

       
            <td>
            <div class="form-group">
                
                
                <select class="form-control" id="sel1" name="category0">

                    @foreach($category as $cat)
                        <option value={{$cat->id}}>{{$cat->name}} - {{$cat->amount}}</option>
                    @endforeach
                </select>

            </div>
            </td>
            <td><button type="button" class="btn btn-primary" id="add_btn"> <i class="fas fa-plus"></i></button></td>
        </tr>
        <tr>


        </tr>
    </tbody>
</table>
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

<script type="text/javascript">
    
    $(document).ready(function(){
       
        $('#add_btn').on('click',function(){
            var i = 1;
            var html = '';
            html+= '<tr>';
            html+= '<td>'
            html+= '<div class="form-group">'     
            html+= '<select class="form-control" id="sel1" name="category1">'
            html+= '@foreach($category as $cat)'
            html+= '<option value={{$cat->id}} >{{$cat->name}} - {{$cat->amount}}</option>'
            html+= '@endforeach'
            html+= '</select>'
            html+= '</div>'
            html+= '</td>'
            html+= '<td><button type="button" class="btn btn-danger" id="rmv_btn"> <i class="fas fa-minus"></i></button></td>'
            html+= '</tr>'
            $('#dynamic').append(html);
            i++;
        })
    });
    $(document).on('click','#rmv_btn',function(){
        $(this).closest('tr').remove();
    })
</script>

