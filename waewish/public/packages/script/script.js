$("#notimodal").animatedModal({
	 color:'#152D37',
});


//var token = $("input[name=_token]").val();

function subscribe(){
	var email = $.trim($('#email_address').val());
	if(email!=0 && email!=''){
		$('#saveBtn').attr('disabled', true);
		$.ajax({
			url : '/subscribe/subscribeuser',
			type : 'POST',
			dataType : 'JSON',
			data : {'email_address':email},
			success : function(data) {
				$('#saveBtn').attr('disabled', false);
				if(data!=0){
					$('#success-text').show();
					setTimeout(function(){
						$('#success-text').hide();
			        },3000);
				}
				else{
					$('#error-text').html('This is not a email address!!');
					$('#error-text').show();
					setTimeout(function(){
						$('#error-text').hide();
			        },2500);
				}
			}
		});
	}
	else{
		
		$('#error-text').html('email is required');
		$('#error-text').show();
		setTimeout(function(){
			$('#error-text').hide();
        },2500);
	}
}