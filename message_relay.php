<?php 
require('lib/Pusher.php');

// Change the following with your app details:
// Create your own pusher account @ https://app.pusher.com
$app_id = '107923'; // App ID
$app_key = '7bb2de607cf92f0b1c8c'; // App Key
$app_secret = '5d5d008285995ee3bedb'; // App Secret
$pusher = new Pusher($app_key, $app_secret, $app_id);

// Check the receive message
if(isset($_POST['message']) && !empty($_POST['message'])) {		
	$data['message'] = $_POST['message'];	
	
	// Return the received message
	if($pusher->trigger('test_channel', 'my_event', $data)) {				
		echo 'success';			
	} else {		
		echo 'error';	
	}
}