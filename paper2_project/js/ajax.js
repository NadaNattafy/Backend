
var log = console.log; 


$('form.leave-comment').submit(function(event){
	// stop the default behavior of the form
	event.preventDefault();

	// get inputs values 
	var name = $('input[name="name"]').val();
	var phone = $('input[name="phone"]').val();
	var email = $('input[name="email"]').val();
	var message = $('textarea').val();

	if(!name){
		$('input[name="name"]').attr('placeholder' , 'name is required').addClass('alerts');
	}

	if(!phone){
		$('input[name="phone"]').attr('placeholder' , 'phone is required').addClass('alerts');
	}

	if(!email){
		$('input[name="email"]').attr('placeholder' , 'email is required').addClass('alerts');
	}

	if(!message){
		$('textarea').attr('placeholder' , 'message is required').addClass('alerts');
	}


	if(name && phone && email && message) {
		$.post('functions/sendMessage.php' , {
			Name : name ,
			Phone : phone , 
			Email : email , 
			Message : message
		} , function(data){
			$('.resMessage').html(data);
		});


		$('input , textarea').val('');
	}
	
})