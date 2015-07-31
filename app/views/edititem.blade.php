{{ Form::model($item, ['method' => 'PUT', 'route' => ['items.update', $item->id]]) }}



    <div>
        {{Form::label('name', 'Name:')}}
        {{Form::text('name')}}
    </div>
    <div>
        {{Form::label('description', 'Description:')}}
        {{Form::text('description')}}
    </div>
    <div>
        {{Form::label('price', 'Edit Price :')}}
        {{Form::text('price')}}
    </div>


    <div>
        {{Form::submit('Update Item')}}
    </div>



{{Form::close()}}