<div class="row" style="">
	<form method="get" action="{{ url('user/cari') }}" id="form-pencarian">
		<div class="col-md-4">
			<select class="form-control" name="level" id="level">
				@if(empty($level))
					<option value="" selected>-Level-</option>
				@else
					<option value="">-Level-</option>
				@endif
				@if($level == 'admin')
				<option value="admin" selected>Admin</option>
				@else
				<option value="admin">Admin</option>
				@endif
				@if($level == 'gamer')
				<option value="gamer" selected>Gamer</option>
				@else
				<option value="gamer">Gamer</option>
				@endif
			</select>
		</div>
		<div class="col-md-8">
			<div class="input-group">
				<input type="text" class="form-control" name="name" value="{{!empty($name) ? $name : null}}">
				
				<span class="input-group-btn">
				<button type="submit" class="btn btn-default">
				search
				</button>
				</span>
			</div>	
		</div>
		</form>
</div>