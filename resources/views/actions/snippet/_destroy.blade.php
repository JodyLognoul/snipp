@if (Auth::check())
{!! Form::open(['action' => ['SnippetController@destroy', $snippet->id ], 'method' => 'DELETE', 'class' => 'form-snippet-destroy' ]) !!}
	{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!! Form::close() !!}
@endif
