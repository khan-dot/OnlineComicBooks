

$(document).ready(function(){

	$('#loginIcon').colorbox({inline: true, width:"389px", close: '<i class="icofont-close-circled"></i>'});
	$('#loginForm .secBtn').colorbox({inline: true, width:"389px", close: '<i class="icofont-close-circled"></i>'});
	$('#registerForm .secBtn').colorbox({inline: true, width:"389px", close: '<i class="icofont-close-circled"></i>'});

  $("#commentBtn").click(function(){
    if($('#comment').val() == '') {
      return false;
    }

    if($("#isLogin").val() == 'no') {
      alert('please login to continue!');
      return;
    }

      $.ajax({
        url: '/comment',
        method: 'POST',
        headers: {'X-CSRF-TOKEN': $('#csrf_token').val()},
        dataType: 'json',
        data: {
          comment: $('#comment').val(),
          comic_id: $('#comic_id').val(),
        },
      }).done(function(resp) {
        window.location.reload();
      });
  });
});


function logout()
{
	$.ajax({
		url: '/logout',
		method: 'POST',
		headers: {'X-CSRF-TOKEN': $('#csrf_token').val()},
		dataType: 'json',
	}).done(function(resp) {
		window.location.reload();
	})
}



function submitLogin()
{
	$('#login_err').hide();

	if ($('#email').val() == '') {
		$('#login_err').show();
		$('#login_err').html('Email required!');
		return false;

	} else if ($('#password').val() == '') {
		$('#login_err').show();
		$('#login_err').html('Password required!');
		return false;
	}

	$('#loginForm .priBtn').addClass('spinner');
	$.ajax({
		url: '/login',
		method: 'POST',
		headers: {'X-CSRF-TOKEN': $('#csrf_token').val()},
		dataType: 'json',
		data: {
			email: $('#email').val(),
			password: $('#password').val(),
		},
	}).done(function(resp) {
		
		window.location.reload();
	
	}).catch(function(resp) {
		console.log(resp.responseJSON);
		$('#login_err').show();
		if(resp.responseJSON.message) {
			$('#login_err').html(resp.responseJSON.message);
		} else {
			$('#login_err').html('Something Went Wrong!');
		}
		$('#loginForm .priBtn').removeClass('spinner');
	});
}


function submitRegister()
{
	$('#reg_err').hide();
	console.log('here');

	if ($('#reg_email').val() == '') {
		$('#reg_err').show();
		$('#reg_err').html('Email required!');
		return false;

	} else if ($('#reg_password').val() == '') {
		$('#reg_err').show();
		$('#reg_err').html('Password required!');
		return false;

	} else if ($('#full_name').val() == '') {
		$('#reg_err').show();
		$('#reg_err').html('Your full name is required!');
		return false;

	}  else if ($('#reg_password').val() != $('#conf_password').val()) {
		$('#reg_err').show();
		$('#reg_err').html('Password and confirm password not matching!');
		return false;

	} else if ($('#reg_password').val().length < 8) {
		$('#reg_err').show();
		$('#reg_err').html('The password must be at least 8 characters!');
		return false;
	}

	$('#registerForm .priBtn').addClass('spinner');
	$.ajax({
		url: '/register',
		method: 'POST',
		headers: {'X-CSRF-TOKEN': $('#csrf_token').val()},
		dataType: 'json',
		data: {
			name: $('#full_name').val(),
			email: $('#reg_email').val(),
			password: $('#reg_password').val(),
			password_confirmation: $('#conf_password').val(),
		},
	}).done(function(resp) {
		
		window.location.reload();
	
	}).catch(function(resp) {
		console.log(resp.responseJSON);
		$('#reg_err').show();
		if(resp.responseJSON.message) {
			$('#reg_err').html(resp.responseJSON.message);
		} else {
			$('#reg_err').html('Something Went Wrong!');
		}
		$('#registerForm .priBtn').removeClass('spinner');
	});
}