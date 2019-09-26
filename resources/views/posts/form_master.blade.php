<div class="row">
	<div class="col-sm-2">
		{ form::label{'title', Title} }
	</div>
	<div class="col-sm-10">
		<div class="form-group {{$errors->has('title') ? 'has-error' : ""}}">
			{{ Form::text('title', NULL, ['class'=> 'form-control', 'id' => 'title', 'placeholder'->'Title Post...']) }}
			{{ $error-> first('title', '<p class="help-block">:message</p>')}}
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		{ Form::label('body', 'Body') }
	</div>
	<div class="col-sm-10">
			<div class="form-group {{$errors->has('body') ? 'has-error' : ""}}">
			{{ Form::text('body', NULL, ['class'=> 'form-control', 'id' => 'body', 'placeholder'->'Body Post...']) }}
			{{ $error-> first('body', '<p class="help-block">:message</p>')}}
		</div>

	</div>
</div>
<div class="form-group">
	{{ Form::button(isset($model) ? 'update' : 'save' , ['class' => 'btn btn-success', 'type' => 'submit']) }}
</div>	