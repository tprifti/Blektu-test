{{Form::open(['route'=>'user.store'])}}

{{Form::label('email','Email')}}
{{Form::email('email')}}
{{Form::label('firstname','Emri')}}
{{Form::text('firstname')}}
{{Form::label('lastname','Mbiemri')}}
{{Form::text('lastname')}}
{{Form::label('username','Username')}}
{{Form::text('username')}}
{{Form::label('password','Fjalëkalimi')}}
{{Form::password('password')}}
{{Form::label('password_repeat','Konfirmo Fjalëkalimin')}}
{{Form::password('password_repeat')}}
{{Form::submit('Regjistrohu') }}
{{$errors -> first()}}

{{Form::close()}}