<?php

$mensagensErro = [];

//* Puxar e limpar códigos de erro do sistema -->
//* --------------------------------------------------------------
$puxarDadosMensagem = file_get_contents("./mensagens_erro.txt");
$puxarDadosMensagem = explode("\/", $puxarDadosMensagem);
$puxarDadosMensagem = array_values($puxarDadosMensagem);

foreach($puxarDadosMensagem as $cada_mensagem_erro){

    $cada_mensagem_erro = trim($cada_mensagem_erro);
    list($codigo, $mensagem) = explode("||", $cada_mensagem_erro);

    $mensagensErro[$codigo] = str_replace("-_-", "\n", $mensagem);
}
//* -----------------------------------------------------------------


//* Função responsável pelas mensagens 
//* ---------------------------------------
function enviarMensagem($codigo)
{
    global $mensagensErro;
    echo $mensagensErro[$codigo];
}
//* --------------------------------------
