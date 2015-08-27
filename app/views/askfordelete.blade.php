<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
{{ Form::open(array('method' => 'POST','route'=> array('delete.user', $user->id))) }}

<div>
        {{Form::submit('Delete User')}}
</div>

    {{Form::close()}}

</body>
</html>