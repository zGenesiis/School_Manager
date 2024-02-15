<?php
//* Code to run and check inputs from client
require_once 'message.php';
require_once 'requirement.php';


function checkDateInfo(&$date)
{
    $pattern = "~^[\d]{2}/[[\d]{2}/[\d]{4}$~";
    $response = trim($date, " ");
    
    
    while(! preg_match($pattern, $response)) {
        sendMessage("Data inválida, por favor insira corretamente.");
        $response = requirement("data");
    };
    $date = $response;
}

function checkNameInfo(&$name)
{
    $response = trim($name);
    while(mb_strlen($response) == 0){
        sendMessage("Insira seu nome.");
        $response = requirement("name");
    }
    $name = $response;
}