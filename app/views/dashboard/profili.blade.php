<h2>Welcome : {{$user->firstname}}</h2>

<hr>



<h4>EMAIL :		{{$user->email}} </h4>
<h3>USERNAME :	{{$user->username}} </h3>
<h3>FIRSTNAME : {{$user->firstname}} </h3>
<h3>LASTNAME :	{{$user->lastname}} </h3>
<h3>ADRESS 1 :	{{$user->address1}} </h3>
<h3>ADRESS 2 :  {{$user->address2}} </h3>
<h3>PHONE :		{{$user->phone}} </h3>

{{ link_to_route('admins.edit', 'Edit User', $user->id)}}