<!doctype html>
<html>
    
    <head>
        <meta charset="UTF-8">
    </head>

    <body>

    <button type="button" onclick="window.location='{{ route("all.users") }}'">All Users</button>

    <h1>Welcome: {{Auth::admin()->get()->username}}</h1>
    <h1>Emaili jot eshte: {{Auth::admin()->get()->email}}</h1>
    
    
    
    </body>


</html>
