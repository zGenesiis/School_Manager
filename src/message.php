<?php

/*
*  To send messages to the client. Still
*  thinking about a fancier way to do this
*/

function sendMessage(string $message)
//Envio de informações do servidor ao cliente
{
    echo "Servidor diz: $message" . PHP_EOL;
}
