

$(document).ready(function(){

	$('#loginIcon').click(function() {
		openLoginPopup();
	});


});


function openLoginPopup()
{
	$.colorbox({html: $('#loginForm').html(), width:"389px", close: '<i class="icofont-close-circled"></i>'});
}


function openRegisterPopup()
{
	$.colorbox({html: $('#registerForm').html(), width:"389px", close: '<i class="icofont-close-circled"></i>'});
}



function submitLogin()
{
	console.log('khan');

	console.log($('#email').val());

}