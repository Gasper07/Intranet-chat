<?php 
require('lib/Pusher.php');

// Change the following with your app details:
// Create your own pusher account @ https://app.pusher.com
$app_id = '309483'; // App ID
$app_key = '1699db0a3a3aec4d93c6'; // App Key
$app_secret = '17a8b609741fa2891df9'; // App Secret
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