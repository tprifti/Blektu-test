<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <li>{{Auth::user()->get()->username}}</li>
        <li>{{Auth::user()->get()->firstname}}</li>
        <li>{{Auth::user()->get()->lastname}}</li>


{{ Form::open(array('method' => 'GET','route'=>['show.items', $user->get()->id] )) }}

{{Form::submit('Show my items')}}


{{Form::close()}}
    </body>

</html>
