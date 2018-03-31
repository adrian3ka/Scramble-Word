$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
});

$(document).ready(function() {
	var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
	$(".buttonToTop").click(function () {
	   //1 second of animation time
	   //html works for FFX but not Chrome
	   //body works for Chrome but not FFX
	   //This strange selector seems to work universally
	   $("html, body").animate({scrollTop: 0}, 400);
	});
	$('#getRequest').click(function(){
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
		var iduser = $('#idUser').val();
		if ($('#questionId').html() == 0){
			$('div#info').text('Please click start button');
			$('div#info').addClass('btn-warning');
		}else if(ans == ""){
			$('div#info').text('Please guess first');
			$('div#info').addClass('btn-warning');
		}
		else{
			$.ajax({
				url: "answer",
				type: "POST",
				data: { answer:ans , idGame:id , idUser:iduser , _token:CSRF_TOKEN},
				success:function(data){
					console.log(data);
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
					console.log('asd');
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