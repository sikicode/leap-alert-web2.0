<?php

use Twilio\Rest\Client;
require_once __DIR__ . '/autoload.php';

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC654d8e79ed4cae7af80d2ffa2f0f6212';
$auth_token = 'cbb2845d0baf1c12b1d75ce67a6f5ec2';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+17068906270";
$customized_message = 'DISTRESS SIGNAL ALERT: Your child has sent a EMERGENCY distress signal!';
$client = new Client($account_sid, $auth_token);
$client->messages->create(
    // Where to send a text message (your cell phone?)
    '+17622411175',
    array(
        'from' => $twilio_number,
        'body' => $customized_message
    )
);

?>
