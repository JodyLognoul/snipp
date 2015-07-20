@extends('master')

@section('content')

@include('errors.list')

<div class="snippet-new">
	{!! Form::open(array('action' => 'SnippetController@store')) !!}

	<div class="form-group">
		{!! Form::label('description', 'Description:') !!}
		{!! Form::text('description',null, ['class' => 'form-control', 'required' => 'required','placeholder' => 'Description of the snippet']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('content', 'Content:') !!}
		{!! Form::textarea('content',null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Content of the snippet']) !!}
	</div>

	{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}

	{!! Form::close() !!}
	<hr>
	<a class="btn btn-default" href="{{ route('snippet.index') }}" role="button"><i class="fa fa-back"></i> List of snippets</a>
</div>

@endsection
