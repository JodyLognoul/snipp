@if (Auth::check())
	<a class="btn btn-success" href="{{ route('snippet.edit', $snippet->id) }}" role="button">
		<i class="fa fa-edit"></i> Edit
	</a>
@endif
