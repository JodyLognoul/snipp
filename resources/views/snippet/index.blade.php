@extends('master')

@section('content')

@include('errors._list')
@include('snippet._message')

<div class="snippet-index">
	@if (Auth::check())
		<a class="btn btn-default" href="{{ route('snippet.create') }}" role="button">New Snippet</a>
	@endif

	<div class="search">
		<input type="text" 
			   v-model="query"
			   v-on="keyup: search | key 'enter'"
			   class="input-search-snippet form-control">
	</div>
	<div class="search-result">
		<div class="list-group" v-repeat="snippets">

			<a href="/snippet/@{{ id }}" id="snippet-@{{ id }}" class="list-group-item">
				<h4 class="list-group-item-heading">
					@{{ description }}
					<span class="label label-warning pull-right">@{{ namespace }}</span>
					<span class="label label-success pull-right">@{{ tags }}</span>
				</h4>

				<p class="list-group-item-text">
					<pre>
						<code class="hljs @{{ language }}">@{{ content }}</code>
					</pre>
				</p>
			</a>
		</div>

	</div>
</div>

@endsection
