
use Twilio\Rest\Client;
require_once __DIR__ . '/vendor/autoload.php';
// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'AC654d8e79ed4cae7af80d2ffa2f0f6212';
$auth_token = 'a52264242589540a2bd5bb223ad55cf0';
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