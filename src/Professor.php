<?php


class Professor
{
    public function __construct(
        public readonly string $nome,
        public readonly string $materia_lecionada,
        public readonly Turma $turma,
        public readonly Escola $escola)
        {
        }
        
    private array $minhas_provas = [];
    private array $provas_dos_alunos = [];
    
    public function montarProva(Turma $turma, string $titulo)
    {
        $nova_prova = new Prova($this->materia_lecionada, $this->nome, $titulo);
        $this->minhas_provas[$titulo] = $nova_prova;
    }


    public function entregarProvas(string $titulo_da_prova)
    {
        foreach($this->turma->alunos_da_turma as $aluno){
            
            $copia_da_prova = $this->minhas_provas[$titulo_da_prova];
            $aluno->receberProva($copia_da_prova);
        }
    }


    public function receberProva(Prova $provaDevolvida): void
    {
        $this->provas_dos_alunos[$provaDevolvida->titulo] = $provaDevolvida;
    }


    public function corrigirProva(Prova $prova): bool
    {
        if ($prova->professor !== $this->nome){
            enviarMensagem("professor de outra matéria");
            return false;
        }   
    
        $nota = match($prova->conteudo){
            "muito mal" => 2,
            "mal" => 5,
            "mediano" => 7,
            "bom" => 9,
            "muito bom" => 10,
        };

        $prova->marcarNota($nota);
        return true;  
    }
}