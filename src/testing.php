<?php 

require_once 'Prova.php';
require_once 'Aluno.php';
require_once 'Professor.php';
require_once 'envio_mensagens.php';
require_once 'Turma.php';
require_once 'Escola.php';


$Escola_SESI = new Escola("SESI-087");

$Sexto_Ano = new Turma("Sexto Ano");

$Professor_Mario = new Professor("Mário", "Inglês", $Sexto_Ano, $Escola_SESI);

$Aluno_Lucivalda = new Aluno( "Lucivalda", $Professor_Mario, $Sexto_Ano, $Escola_SESI);


$Professor_Mario->montarProva($Sexto_Ano, "Verb to be");
$Professor_Mario->montarProva($Sexto_Ano, "Comparative;");


$Professor_Mario->entregarProvas("Comparative");


$Aluno_Lucivalda->responderProva("Comparative", "muito bem");

