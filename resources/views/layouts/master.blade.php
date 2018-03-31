<!DOCTYPE html>
<html>
	
    <head>
		<meta charset="utf-8">
        <title>Word Games</title>
		<!--link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'-->
		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Include the jQuery Mobile library -->
		<!--script src="{{ asset('JQmobile/jquery.mobile-1.4.5.js') }}"></script-->
		
		<link href="{{ asset('bootstrap_3_3_6/css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
		
    </head>
    <body>
		<?php
		$halaman='';
		if (Request::segment(1) == 'game'){
			$halaman = 'game';
		}else if (Request::segment(1) == 'mylog'){
			$halaman = 'mylog';
		}else if (Request::segment(1) == 'user'){
			$halaman = 'user';
		}
		?>
		<div class="container">
			@include('navbar')
			@yield('content')
		</div>
		
	@include('footer')
    </body>
	
	<!-- Include the jQuery library -->
	<script src="{{ asset('JQuery/jquery-1.12.4.js') }}"></script>
	<script src="{{ asset('bootstrap_3_3_6/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{!! URL::asset('js/master.js') !!}"></script>
	<!--script>
	
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
		});
		$(document).ready(function() {
			$(".buttonToTop").click(function () {
			   //1 second of animation time
			   //html works for FFX but not Chrome
			   //body works for Chrome but not FFX
			   //This strange selector seems to work universally
			   $("html, body").animate({scrollTop: 0}, 400);
			});
			$('#getRequest').click(function(){
				console.log('{{ Auth::user()->name }}');
				$.getJSON('getRequest',function(data){
					$('#getRequestData').text(data.word);
					$('#questionId').text(data.id);
					$('#hint').text(data.hint);
					$('#info').text('');
					console.log(data);
				});
			});
			$('#answer').submit(function(){
				$('#info').text('');
				$('div#info').removeClass('btn-warning');
				$('div#info').removeClass('btn-success');
				$('div#info').removeClass('btn-danger');
				var ans = $('#wordAnswer').val();
				var id = $('#questionId').html();
				var iduser = '{{ Auth::user()->id }}';
				if ($('#questionId').html() == 0){
					$('div#info').text('Please click start button');
					$('div#info').addClass('btn-warning');
				}else if(ans == ""){
					$('div#info').text('Please guess first');
					$('div#info').addClass('btn-warning');
				}
				else{
					/*$.post('answer',{answer:ans , idGame:id , idUser:iduser},function(data){
						$('#info').text(data.result);
						$('#userScore').text('Score : ' +data.score);
						if(data.result == "Correct, you got 100 points!!"){
							$('div#info').addClass('btn-success');
							$.getJSON('getRequest',function(data){
								$('#getRequestData').text(data.word);
								$('#questionId').text(data.id);
								$('#hint').text(data.hint);
								$('#wordAnswer').val("");
							});
						}else{
							$('div#info').addClass('btn-danger');
						}
					});*/
					$.ajax({
						url: "answer",
						type:"POST",
						data: { answer:ans , idGame:id , idUser:iduser },
						success:function(data){
							$('#info').text(data.result);
							$('#userScore').text('Score : ' +data.score);
							if(data.result == "Correct, you got 100 points!!"){
								$('div#info').addClass('btn-success');
								$.getJSON('getRequest',function(data){
									$('#getRequestData').text(data.word);
									$('#questionId').text(data.id);
									$('#hint').text(data.hint);
									$('#wordAnswer').val("");
								});
							}else{
								$('div#info').addClass('btn-danger');
							}
						},error:function(){ 
							alert("error!!!!");
						}
					}); //end of ajax
					
				}	
				return false;
			});
			$('#resetAnswer').click(function(){
				console.log('reset');
				$('#wordAnswer').val("");
			});
			$('div.alert').not('.alert-important').delay(3000).slideUp(300);
			$('#form-pencarian').submit(function() {
				$('#level option[value=""]').attr('disabled', 'disabled');
				// Pastikan proses submit masih diteruskan
				console.log('asd');
				return true;
			});
		});
	</script-->
</html>
