<?php


class Turma
{
    public array $alunos_da_turma = [];
    public int $quantidade_alunos = 0;
    public function __construct(public readonly string $Turma, array|false $alunos = false)
    {
        if(! $alunos) {return;}

        foreach($alunos as $aluno){
            $this->alunos_da_turma[$aluno->nome] = $aluno;
            $this->quantidade_alunos += 1;
        }

        ksort($this->alunos_da_turma);    
    }


    public function adicionarAluno(Aluno $aluno)
    {
        $this->alunos_da_turma[$aluno->nome] = $aluno;
        $this->quantidade_alunos += 1;
    }
    
}