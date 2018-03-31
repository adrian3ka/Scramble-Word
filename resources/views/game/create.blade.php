@extends('layouts.master')

@section('content')

<h2>Add Word
</h2>

<div id="game">
	@include('_partial.flash_message')
	<form class="form-horizontal" method="POST" action="{{ url('game') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		@if($errors->any())
		<div class="form-group {{ $errors->has('word') ?
					'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			<label for="word" class="control-label">Word</label>
			<input id="word" type="text" class="form-control" name="word" value=" {{ old('word') }}">
			@if($errors->has('word'))
			<span class="help-block"> {{ $errors->first('word')}}</span>
			@endif
		</div>
		@if($errors->any())
		<div class="form-group {{ $errors->has('hint') ?
					'has-error' : 'has-success'}}">
		@else
		<div class="form-group">
		@endif
			<label for="hint" class="control-label">Hint</label>
			<input id="hint" type="text" class="form-control" name="hint" value="{{ old('hint') }}">
			@if($errors->has('hint'))
			<span class="help-block"> {{ $errors->first('hint')}}</span>
			@endif
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-warning" value="submitWord">Submit Word</button>
		</div>
	</form>

	<div id="info">
	</div>
</div>
	
@endsection