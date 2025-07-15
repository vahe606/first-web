$('.user_btn').click(function(){
	let login=$('.user_log_inp').val()
	let pass=$('.user_pass_inp').val()
	if (login.length==0) {
		$('.err-1').show()
	}else{
		$('.err-1').hide()
	}
	if (pass.length==0) {
		$('.err-2').show()
	}else{
		$(' .err-2').hide()
	}

	$.post('user.php',{
		login1:login,
		pass1:pass
	},function(bod){
		$('.admin_box').html(bod)
	})


})