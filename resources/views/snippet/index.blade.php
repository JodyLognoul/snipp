@extends('master')

@section('content')

@include('errors._list')
@include('snippet._message')

<div class="snippet-index">
	@if (Auth::check())
		<a class="btn btn-default" href="{{ route('snippet.create') }}" role="button">New Snippet</a>
	@endif

	<div class="search">
		<input type="text" name="" id="input" placeholder="Search for a snippet" class="form-control" value="" title="">
	</div>

	<div class="search-result">
		<div class="list-group">
			@foreach ($snippets as $snippet)

			<a href="{{ route('snippet.show', $snippet->id) }}" class="list-group-item">
				<h4 class="list-group-item-heading">{{ $snippet->description }}</h4>
				<p class="list-group-item-text">
					@include('snippet._content')
				</p>
			</a>

			@endforeach
		</div>

	</div>
</div>

@endsection
