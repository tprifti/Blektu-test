<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
<h1>All Items</h1>
    @foreach($items as $item)
        <li>{{ link_to("/items/{$item->id}",$item -> name) }}</li>
    @endforeach
</body>

</html>
