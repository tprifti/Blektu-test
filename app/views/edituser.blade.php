<!--{{ Form::model($user, ['method' => 'PATCH', 'route' => ['admins.edit', $user->id]]) }}-->
{{ Form::open(array('method' => 'PATCH','route'=> array('admins.update', $user->id))) }}


	<div>
		{{Form::label('firstname', 'Firstame:')}}
		{{Form::text('firstname')}}
	</div>
	<div>
		{{Form::label('lastname', 'Lastname:')}}
		{{Form::text('lastname')}}
	</div>
	<div>
		{{Form::label('address1', 'Edit Adress 1 :')}}
		{{Form::text('address1')}}
	</div>
	<div>
		{{Form::label('address2', 'Edit Adress 2 :')}}
		{{Form::text('address2')}}
	</div>
	<div>
		{{Form::label('phone', 'Edit Phone :')}}
		{{Form::text('phone')}}
	</div>

	<div>
		{{Form::submit('Update User')}}
	</div>



{{Form::close()}}