@extends('layouts.master')

@section('content')
	<div class="content">
		<h2>{{ $user->name }}'s Log
		</h2>
		@if($gamelog_count != 0)
		<table class="table">
			<thead>
				<th>Action</th>
				<th>Time</th>
			</thead>
			<tbody>
				@foreach($gamelog_list as $log)
				<tr>
					<td>{{ $log->action }}</td>
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