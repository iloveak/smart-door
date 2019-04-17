

<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
require_once 'Twilio/autoload.php'; 
 
use Twilio\Rest\Client; 
 
$sid    = "AC9852060d0d04586d8c1881eb0c7708ea"; 
$token  = "97017cbe1047c2863ed5ef030d0f1094"; 
$twilio = new Client($sid, $token); 
 
$message = $twilio->messages 
                  ->create("+918104522695", // to 
                           array( 
                               "from" => "+19147522185",       
                               "body" => "This is sucessful test from twilio and url is www.google.com" 
                           ) 
                  ); 
 
print($message->sid);