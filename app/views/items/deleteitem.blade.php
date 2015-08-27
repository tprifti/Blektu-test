<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
{{ Form::open(array('method' => 'POST','route'=> array('delete.item', $item->id))) }}

<div>
        {{Form::submit('Delete This Item')}}
</div>

    {{Form::close()}}

</body>
</html>