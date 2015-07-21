@extends('master')
@section('content')

@include('snippet._message')
@include('errors._list')

<div class="snippet-show">

	<h1>{{ $snippet->description }}</h1>

	<p>
		<code>{{ $snippet->content }}</code>
	</p>

	<hr>

	{{-- Link to snippet.destroy --}}
	@include('controls.snippet._destroy')

	{{-- Link to snippet.index --}}
	@include('controls.snippet._list')

	{{-- Link to snippet.edit --}}
	@include('controls.snippet._edit')

</div>

@endsection
