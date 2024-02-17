<?php
class Aluno
{
    public function __construct(
        public string $nome,
        public readonly Professor $professor,
        public readonly Turma $turma,
        public readonly Escola $escola)
        {
            $this->turma->novoAluno($this);
        }
    
    protected array $provas_do_aluno = [];

    public function receberProva(Prova $prova)
    {
        $this->provas_do_aluno[$prova->titulo] = $prova;
    }
    
    public function responderProva(string $prova, string $resposta)
    {
    
    }


    public function verMinhaNota(Prova $prova)
    {

    } 
}