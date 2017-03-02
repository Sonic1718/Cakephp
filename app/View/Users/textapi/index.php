<?php
require 'class-Clockwork.php';
$API_KEY = "d86c1eb0d0ab5b34d1e91da2e3a22658d5391f3f";
try
{
    // Create a Clockwork object using your API key
    $clockwork = new Clockwork( $API_KEY );
 
    // Setup and send a message
    $message = array( 'to' => '09466573049', 'message' => 'This is a test!' );
    $result = $clockwork->send( $message );
 
    // Check if the send was successful
    if($result['success']) {
        echo 'Message sent - ID: ' . $result['id'];
    } else {
        echo 'Message failed - Error: ' . $result['error_message'];
    }
}
catch (ClockworkException $e)
{
    echo 'Exception sending SMS: ' . $e->getMessage();
}
?>