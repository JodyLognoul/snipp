<div class="form-group">
	{!! Form::label('description', 'Description:') !!}
	{!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description of the snippet']) !!}
</div>
<div class="form-group">
	{!! Form::label('content', 'Content:') !!}
	{!! Form::textarea('content', null, ['class' => 'form-control',  'placeholder' => 'Content of the snippet']) !!}
</div>

{!! Form::submit($submitBtnText, ['class' => 'btn btn-success']) !!}
