<<?php


// * Just a simulation of a input

function requirement($pullForms){
    $pullName = "Taís Andrade";
    $pullDate = "16/10/2007";
    
    match($pullForms) {
        "name" => $send = $pullName,
        "date" => $send = $pullDate,
    };

    return $send;
}