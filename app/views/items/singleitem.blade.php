<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
<li>{{$item->name}}</li>
<li>{{$item->description}}</li>
<li>{{$item->price}}</li>
<li>{{$item->brand}}</li>
<li>{{$size}}</li>
<li>{{$condition}}</li>
<li>{{$category}}</li>
<li>{{$color}}</li>
{{HTML::image($image_path)}}
</body>

</html>
