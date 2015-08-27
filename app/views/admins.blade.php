{{Form::open(array('route' => 'admins.store'))}}
<h1>ADMIN LOGIN </h1>
{{Form::label('username', 'Username')}}
{{Form::text('username')}}
{{Form::label('password', 'Password')}}
{{Form::password('password')}}
{{Form::submit('Login')}}
{{$errors->first()}}

{{Form::close()}}