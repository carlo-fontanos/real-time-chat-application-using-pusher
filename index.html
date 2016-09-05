<!DOCTYPE html>
<head>	
	<title>Pusher Test</title>	
<link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript" ></script>	
<script src="//js.pusher.com/2.2/pusher.min.js" type="text/javascript" type="text/javascript" ></script>	
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js" type="text/javascript" ></script>	
<script src="//cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.3.0/bootbox.min.js" type="text/javascript" ></script>		
	<script type="text/javascript">	
	// Enable pusher logging - don't include this in production	//Pusher.log = function(message) {	
	//if (window.console && window.console.log) {			
	//window.console.log(message);		
	//}	//};		
	</script>		
	
<style = "text/css">	
<!--		
.messages_display {height: 300px; overflow: auto;}		
.messages_display .message_item {padding: 0; margin: 0; }		
.bg-danger {padding: 10px;}	-->	
</style>		
</head>
<body>

<br />	
<div class = "container">		
	<div class = "col-md-6 chat_box">						
		<div class = "form-control messages_display"></div>			
		<br />						
		<div class = "form-group">				
			<label>Name</label>				
			<input type = "text" class = "input_name form-control" placeholder = "Name" />			
		</div>						
		<div class = "form-group">				
			<label>Message</label>				
			<textarea class = "input_message form-control" placeholder = "Message"></textarea>			
		</div>						
		<div class = "form-group input_send_holder">				
			<input type = "submit" value = "Send" class = "btn btn-primary input_send" />			
		</div>					
	</div>				
	
	<script type="text/javascript">			
	// Enter your own Pusher App key
	var pusher = new Pusher('7bb2de607cf92f0b1c8c');
	// Enter a unique channel you wish your users to be subscribed in.
	var channel = pusher.subscribe('test_channel');
	channel.bind('my_event', function(data) {
		// Add the new message to the container
		$('.messages_display').append('<p class = "message_item">' + data.message + '</p>');
		// Display the send button
		$('.input_send_holder').html('<input type = "submit" value = "Send" class = "btn btn-primary input_send" />');
		// Scroll to the bottom of the container when a new message becomes available
		$(".messages_display").scrollTop($(".messages_display")[0].scrollHeight);
	});
	
	// AJAX request
	function ajaxCall(ajax_url, ajax_data) {
		$.ajax({
			type: "POST",
			url: ajax_url,
			dataType: "json",
			data: ajax_data,
			success: function(response, textStatus, jqXHR) {
				console.log(jqXHR.responseText);
			},
			error: function(msg) {}
		});
	}
	
	// Trigger for the Enter key when clicked.
	$.fn.enterKey = function(fnc) {
		return this.each(function() {
			$(this).keypress(function(ev) {
				var keycode = (ev.keyCode ? ev.keyCode : ev.which);
				if (keycode == '13') {
					fnc.call(this, ev);
				}
			});
		});
	}
	
	// Send the Message
	$('body').on('click', '.chat_box .input_send', function(e) {
		e.preventDefault();
		
		var message = $('.chat_box .input_message').val();
		var name = $('.chat_box .input_name').val();
		
		// Validate Name field
		if (name === '') {
			bootbox.alert('<br /><p class = "bg-danger">Please enter a Name.</p>');
		
		} else if (message !== '') {
			// Define ajax data
			var chat_message = {
				name: $('.chat_box .input_name').val(),
				message: '<strong>' + $('.chat_box .input_name').val() + '</strong>: ' + message
			}
			// Send the message to the server
			ajaxCall('message_relay.php', chat_message);
			
			// Clear the message input field
			$('.chat_box .input_message').val('');
			// Show a loading image while sending
			$('.input_send_holder').html('<input type = "submit" value = "Send" class = "btn btn-primary" disabled /> &nbsp;<img src = "loading.gif" />');
		}
	});
	
	// Send the message when enter key is clicked
	$('.chat_box .input_message').enterKey(function(e) {
		e.preventDefault();
		$('.chat_box .input_send').click();
	});
	</script>
	
</div>
</body>