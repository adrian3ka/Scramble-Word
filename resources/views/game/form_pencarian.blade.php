<div class="row" style="">
	<form method="get" action="{{ url('game/all/cari') }}" id="form-pencarian">
		<div class="col-md-12">
			<div class="input-group">
				<input type="text" class="form-control" name="word" value="{{!empty($word) ? $word : null}}">
				
				<span class="input-group-btn">
				<button type="submit" class="btn btn-default">
				search
				</button>
				</span>
			</div>	
		</div>
		</form>
</div>