<nav class="navbar navbar-default">
<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed"
				data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1"
				aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="{{ url('/') }}">Scramble Word</a>
	</div>
	<div class="collapse navbar-collapse"
		 id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav">
			@if(!empty($halaman) && $halaman == 'game')
				<li class="active"> <a href="{{ url('game')}}">
					Game
					<span class="sr-only">(current)</span>
				</a></li>
			@else			
				<li> <a href="{{ url('game')}}">Game</a></li>
			@endif
			
			@if(Auth::check())
				@if(!empty($halaman) && $halaman == 'mylog')
					<li class="active"> <a href="{{ url('mylog')}}">
						My Log
						<span class="sr-only">(current)</span>
					</a></li>
				@else			
					<li> <a href="{{ url('mylog')}}">My Log</a></li>
				@endif
			@endif
			
			@if(Auth::check() && Auth::user()->level == 'admin')
				@if(!empty($halaman) && $halaman == 'user')
					<li class="active"> <a href="{{ url('user')}}">
						User's Log
						<span class="sr-only">(current)</span>
					</a></li>
				@else			
					<li> <a href="{{ url('user')}}">User's Log</a></li>
				@endif
			@endif
			
		 </ul>
		 <ul class="nav navbar-nav navbar-right">
			@if(Auth::check())
				<li><a  class="usernameBox" href="{{ route('logout') }}"
						onclick="event.preventDefault();
								 document.getElementById('logout-form').submit();"
						>
						{{ Auth::user()->name }}
					</a>
				</li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			@else
				<li><a href="{{ route('login') }}">Login</a></li>
			@endif
			<li class="dropdown"> </li>
		 </ul>
	</div><!--/.navbar-collapse-->
</div> <!--/.container-fluid -->
</nav>