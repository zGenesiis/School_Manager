<?php
class Aluno
{
    public function __construct(
        public string $nome,
        public readonly Professor $professor,
        public readonly Turma $turma,
        public readonly Escola $escola)
        {
            $this->turma->adicionarAluno($this);
        }
    
    protected array $minhas_provas = [];
    

    //* Setter de $prova pelo $professor 
    public function receberProva(Prova $prova)
    {
        $this->minhas_provas[$prova->titulo] = $prova;
    }
    
    public function responderProva(string $titulo_da_prova, string $resposta)
    {
        $prova_para_responder = $this->minhas_provas[$titulo_da_prova];
        $prova_para_responder->marcarResposta($resposta);
        
    }


    public function verMinhaNota(Prova $prova)
    {
        
    } 
}