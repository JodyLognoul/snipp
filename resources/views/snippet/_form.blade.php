{{-- description --}}
<div class="form-group form-snippet-description">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description of the snippet']) !!}
</div>

{{-- language --}}
<div class="form-group form-snippet-language">
	{!! Form::label('language', 'Language:') !!}
	{!! Form::select('language', Config::get('enums.hljs_languages'), null, ['class' => 'select-hljs-languages form-control']) !!}
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
