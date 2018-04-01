@extends('layouts.master')

@section('content')
	<div class="content">
		<h2>My Log
		</h2>
		@if($gamelog_count != 0)
		<table class="table">
			<thead>
				<th>Action</th>
				@if(Auth::user()->level == 'gamer')
					<th>Result</th>
				@endif
				<th>Time</th>
			</thead>
			<tbody>
				@foreach($gamelog_list as $log)
				<tr>
					@if(Auth::user()->level == 'gamer')
					<td>
						<?php 
							echo substr($log->action,0,strpos($log->action, '-', 0));
						?>
					</td>
					<td>
						<?php 
							echo substr($log->action,strpos($log->action, ',', 0) + 1);
						?>
					</td>
					@else
					<td>{{ $log->action }}</td>
					@endif
					<td>{{ $log->created_at }}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="table-nav">
			<div class="jumlah-data">
				<strong>Total : {{ $gamelog_count }} </strong>
			</div>
			<div class="paging">
			{{$gamelog_list->links()}}
			</div>
		</div>
		@else
			Belum ada aktivitas
		@endif
	</div>
	
@endsection