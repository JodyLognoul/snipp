@extends('master')

@section('content')

@include('errors._list')

<div class="snippet-new">
	{!! Form::open(['action' => 'SnippetController@store']) !!}

	@include('snippet._form', ['submitBtnText' => 'Create the snippet'])

	{!! Form::close() !!}
	<hr>

	{{-- Link to snippet.index --}}
	@include('actions.snippet._list')

</div>

@endsection
