<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <li>{{$user->get()->username}}</li>
        <li>{{$user->get()->firstname}}</li>
            {{$user->get()->lastname}}

    </body>

</html>
