
var log = console.log ; 

$('.modalBtn').click(function(){

	 // $(this).parent().parent().find('.view').text('read');
	var id = $(this).attr('data-id');
	var span = $(this).parent().prev().text();

	// var id = $(this).data('id');

	$(this).parent().prev().text('read');

	$.post('functions/updateMessage.php' , {id : id} , function(data){
		// log(data);
		

		if(span == 'unread'){
			var message = $('.messageSPan').text();
			$('.messageSPan').text(--message);
		}
	})


})