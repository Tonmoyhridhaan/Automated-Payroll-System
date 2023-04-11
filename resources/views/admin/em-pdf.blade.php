<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
    <h1> All Employee Information </h1>
<td> <img src="{{ URL::to('/') }}/thumbnail/{{$data->image}}"  width="60" height="50" alt=""> </td>
                
                <td>{{$data->name}} </td>
                <td>{{$data->address}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->contact_no}}</td>
               
    
    
</body>
</html>