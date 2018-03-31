@extends('layouts.master')

@section('content')
	
	<div class="content">
		<h2>Word Game List
		</h2>
		@include('game.form_pencarian')
		<table class="table">
			<thead>
				<th>Word</th>
				<th>Hint</th>
				<th>Created</th>
			</thead>
			<tbody>
				@foreach($game_list as $g)
				<tr>
					<td>{{ $g->word }}</td>
					<td>{{ $g->hint }}</td>
					<td>{{ $g->created_at->format('H:i:s') }} on {{ $g->created_at->format('D, d/m/y') }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="table-nav">
		
			<div class="jumlah-data">
				<strong>Total : {{ $game_count }} </strong>
			</div>
			<div class="paging">
			{{$game_list->links()}}
			</div>
		</div>
	</div>
	
@endsection