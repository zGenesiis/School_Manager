<?php 

/* 
*  To reasons of still learning and lazyness,
*  this code is a completely mess,
*  don't judge me
*/
require_once 'error_manager.php';
require_once 'Student.php';


//TODO Make an file to store this data down here

$date = "09/09/2005";
checkDateInfo($date);

$name = "         ";
checkNameInfo($name);

$StudentsData = [
    "João Prado" => 7,
    "Maria Joaquina" => 8,
    "Guilherme Freitas" => 2,
    "Miguel Andrade" => 3,
    "Carlos Cruz" => 5.5,
    "Jonhatan Figueiredo" => 7.9,
    "Pedro Rocha" => 6.9,
    "Audrey Matias" => 7.543,
    "Tais Oliveira" => 7,
    "Lucivalda Batista" => 2,
    "José Bittencourt" => 5,
    "Romário Lopes" => 6.3,
    "Vitor Cavalcante" => 7.99,
];

var_dump($name);



$João = new Student("Migueulus Andradis");

echo $João->name;