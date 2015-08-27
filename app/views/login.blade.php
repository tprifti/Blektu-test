<!DOCTYPE html>
<html>
<head>
    <title>Blektu | Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css">
    {{HTML::style('css/views/login.css')}}

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
</head>

<body class="grey lighten-3">

<!-- Log In-->
<hr/>
<div class="grey-text text-lighten-3 grey darken-3 login-text">
    <h2>Log In </h2>
</div>
<hr/>

<div class="row s12 container">

    {{Form::open(['url' => '/login'])}}

    <div class="row">
        <div class="input-field col l5 center-align">
            <i class="large mdi-image-timer-auto prefix"></i>
            {{Form::text('username', '', [ 'id' => 'username' ])}}
            <label for="username">Username</label>
        </div>
    </div>

    <div class="row center-align">
        <div class="input-field col l5">
            <i class="large mdi-action-lock prefix"></i>
            {{Form::password('password', ['id' => 'password'])}}
            <label for="password">Password</label>
        </div>
    </div>

    <div class="row error-mgs">
        {{$errors->first()}}
    </div>

    <div class="row submit-btn">
        <button class="btn waves-effect waves-light grey darken-3" type="submit">
            Submit <i class="mdi-content-send right"></i>
        </button>
    </div>

    {{Form::close()}}
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js"></script>
</body>
</html>