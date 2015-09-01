{{Form::open(array('url' => 'upload', 'files' => 'true'))}}

{{Form::file('image')}}

{{Form::submit('Upload')}}

{{Form::close()}}