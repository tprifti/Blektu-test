<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>

@foreach($user->items as $item)
    	
   <h4>{{$item->price}}</h4>
   <h4>{{$item->description}}</h4>
<button><a href ="{{url('items/'.$item->id.'/edit')}}">Edit item</a></button>
<button><a href ="{{url('items/'.$item->id.'/delete')}}">Delete item</a></button>


@endforeach
<br>
<a href ="{{url('/new/item')}}"><h3>Add new item</h3></a>

</body>

</html>
