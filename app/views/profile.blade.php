<!doctype html>
<html>

    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <li>{{Auth::user()->get()->username}}</li>
        <li>{{Auth::user()->get()->firstname}}</li>
            {{Auth::user()->get()->lastname}}

    </body>

</html>
