@extends('master')

@section('content')

@include('errors._list')

<div class="snippet-new">
	{!! Form::model($snippet, ['method' => 'PATCH', 'action' => ['SnippetController@update', $snippet->id ]]) !!}

	@include('snippet._form', ['submitBtnText' => 'Update the snippet'])

	{!! Form::close() !!}
	<hr>

	{{-- Link to snippet.destroy --}}
	@include('controls.snippet._destroy')

	{{-- Link to snippet.index --}}
	@include('controls.snippet._list')

</div>

@endsection
