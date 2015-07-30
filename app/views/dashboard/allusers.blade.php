<!doctype html>
<html>
    
    <head>
        <meta charset="UTF-8">
    </head>

    <body>

    <h1>YOU CAN SEE ALL USERS HERE</h1>
    @foreach ($users as $user)
        
        
        <h4><a href="{{url('users/'.$user->id)}}">{{$user->username}}</a></h4>
    
    @endforeach
    
 
    
    </body>


</html>
