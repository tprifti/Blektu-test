{{Form::open(['route'=>'items.store'])}}

{{Form::label('name','Name')}}
{{Form::email('name')}}
{{Form::label('description','Description')}}
{{Form::text('description')}}
{{Form::label('price','Price')}}
{{Form::text('price')}}

{{Form::submit('Regjistrohu') }}


{{Form::close()}}