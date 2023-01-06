<?php

// include creds files
include_once("creds.php");

if($_GET['user'] and $_GET['password']){
    $valid_creds = False;

    $user = $_GET['user'];
    $password = $_GET['password'];
    // check if the user and the passwor are good
    if(strcmp($user, USER) === 0 and strcmp($password, PASSWORD) === 0){
        $valid_creds = True;
    }else{
        $valid_creds = False;
    }
    
    if($valid_creds){
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
    }
}
?>

