@extends('layouts.master')

@section('content')
@guest
	Go Register To Play
@else

<h2>Welcome, {{ Auth::user()->name }}
</h2>
@if(Auth::user()->level == 'admin')
	<div class="form-group" style="margin-left:auto;">
		<a href="{{ url('game/create') }} " class="box-button">
			<button type="submit" class="btn fontShowcard">Add Word</button>
		</a>
		<a href="{{ url('game/all') }}" class="box-button" >
			<button type="button" class="btn fontShowcard">See All Words</button>
		</a>
	</div>
@else
	<br>
	<h4>Score will be given for every correct answer, and will be duducted for every wrong answer</h4>

	<div id="game">
		<div id="userScore">
			Score : {{Auth::user()->score }}
		</div>
		<div id="questionId" style="display:none">
		</div>
		<div class="form-group" style="text-align:center;">
			<button type="button" class="btn btn-success fontShowcard" id="getRequest" style="">Start</button>
			<div id="getRequestData">
				Guess Me!!
			</div>
		</div>
		<p id="hint" class="">
		</p>
		<form id="answer" action="">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input id="idUser" type="hidden" name="idUser" value="{{ Auth::user()->id }}">
			<div class="form-group" >
				<input id="wordAnswer" type="text" class="form-control inputText" name="wordAnswer" value="">
			</div>
			<div class="form-group" style="text-align:center;">
				<div class="box-button">
					<button type="submit" class="btn btn-warning fontShowcard" value="submitAnswer">Guess</button>
				</div>
				<div class="box-button" >
					<button type="button" class="btn btn-danger fontShowcard" id="resetAnswer" >Reset</button>
				</div>
			</div>
		</form>
		
		<div id="info" class="btn-success">
		</div>
	</div>
@endif

@endguest
	
@endsection