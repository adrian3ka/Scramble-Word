@extends('layouts.master')

@section('content')
		<div id="user">
		<h2>User</h2>
		@include('user.form_pencarian')
		@if(count($user_list) > 0)
			<table class="table">
				<thead>
					<th>Nama</th>
					<th>Email</th>
					<th>Level</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php $i=0; ?>
					<?php foreach($user_list as $user): ?>
					<tr>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{{ $user->level}}</td>
						<td>
							<a class="box-button" href=" {{ url ('user/' . $user->id  ) }}" >
								<button class="btn btn-success"  >Show</button>
							</a>
						</td>
					<tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<div class="table-nav">
				<div class="jumlah-data">
					<strong>Total : {{ $user_count }} </strong>
				</div>
				<div class="paging">
					{{$user_list->links()}}
				</div>
			</div>
		@else
			<p>Tidak ada data user.</p>
		@endif
		
		
		
		<div class="tombol-nav">
			<a href="{{ url('user/allLog') }}" class="btn btn-primary">
			All User Log</a>
		</div>
		
	</div> <!--/#user-->
@stop

@section('footer')
	@include('footer');
@stop