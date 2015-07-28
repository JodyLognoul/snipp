@inject('language', 'App\Http\Utilities\Language')

{{-- description --}}
<div class="form-group form-snippet-description">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description of the snippet']) !!}
</div>

{{-- namespace --}}
<div class="form-group form-snippet-namespace">
	{!! Form::label('namespace', 'Namespace:') !!}
	{!! Form::text('namespace', null, ['class' => 'form-control', 'placeholder' => 'Namespace for the snippet']) !!}
</div>

{{-- tags --}}
<div class="form-group form-snippet-tags">
	{!! Form::label('tags', 'Tags:') !!}
	{!! Form::text('tags', null, ['class' => 'form-control', 'placeholder' => 'Tags for the snippet']) !!}
</div>

{{-- language --}}
<div class="form-group form-snippet-language">
	{!! Form::label('language', 'Language:') !!}
	{!! Form::select('language', $language::all(), null, ['class' => 'select-hljs-languages form-control']) !!}
</div>

{{-- public --}}
<div class="radio form-snippet-public">
	<p>Public or private:</p>
	<label>
    	{!! Form::radio('public', true); !!}
    	Public
	</label>
	<label>
    	{!! Form::radio('public', false, true); !!}
		Private
	</label>
</div>

{{-- content --}}
<div class="form-group form-snippet-content">
	{!! Form::label('content', 'Content:') !!}
	{!! Form::textarea('content', null, ['class' => 'form-control',  'placeholder' => 'Content of the snippet']) !!}
</div>

{!! Form::submit($submitBtnText, ['class' => 'btn btn-success']) !!}
