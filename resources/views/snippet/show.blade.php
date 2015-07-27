@extends('master')
@section('content')

@include('snippet._message')
@include('errors._list')

<div class="snippet-show">

	<h1>{{ $snippet->description }}</h1>
	<h2><span class="label label-warning">{{ $snippet->namespace }}</span></h2>

	<div class="snippet-content">
		@include('snippet._content')
	</div>

	<hr>

	{{-- Link to snippet.index --}}
	@include('actions.snippet._list')

	{{-- Link to snippet.destroy --}}
	@include('actions.snippet._destroy')

	{{-- Link to snippet.edit --}}
	@include('actions.snippet._edit')

</div>

@endsection
