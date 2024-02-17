<?php


class Turma
{
    public array $alunos_da_turma = [];
    public function __construct(public readonly string $Turma, array|false $alunos = false)
    {
        if(! $alunos) {return;}

        foreach($alunos as $aluno){
            $this->alunos_da_turma[$aluno->nome] = $aluno;
        }

        ksort($this->alunos_da_turma);    
    }


    public function novoAluno(Aluno $aluno)
    {
        Turma::$alunos_da_turma[$aluno->nome] = $aluno;
    }

    


}