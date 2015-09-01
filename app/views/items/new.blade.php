<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add new Item</title>
</head>
<body>
	{{Form::open(['route'=>'new.item', 'files' => 'true' ])}}

{{Form::label('name','Name')}}
{{Form::text('name')}}
{{Form::label('description','Description')}}
{{Form::text('description')}}
{{Form::label('price','Price')}}
{{Form::text('price')}}
{{Form::label('brand','Brand')}}
{{Form::text('brand')}}
{{Form::label('category_ID','Category')}}
  {{Form::select('category_ID', $Category)}}
{{Form::label('condition_ID','Condition')}}
  {{Form::select('condition_ID', $Condition)}}
{{Form::label('color_ID','Color')}}
  {{Form::select('color_ID', $Color)}}
{{Form::label('size_ID','Size')}}
  {{Form::select('size_ID', $Size)}}
{{Form::submit('Add new item') }}

{{Form::file('image')}}



{{Form::close()}}





{{Form::close()}}
</body>
</html>