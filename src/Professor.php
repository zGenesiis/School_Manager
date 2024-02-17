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
    
    protected function correcao(Prova $prova): int
    {
        return match($prova->conteudo){
            "muito mal" => 2,
            "mal" => 5,
            "mediano" => 7,
            "bem" => 9,
            "muito bem" => 10
        };
    }
    
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


    public function corrigirProvas(string $titulo_da_prova): void
    {   
        
        if(! count($this->provas_dos_alunos) === $this->turma->quantidade_alunos){
            enviarMensagem("falta alunos responderem");
            return;
        }

        foreach($this->provas_dos_alunos as $prova_de_aluno){
            $nota = correcao($prova_de_aluno); //TODO   AJEITAR ISSO PARA SEM QUATRO NÍVEIS DE IDENTAÇÃO
            $prova_de_aluno->marcarNota($nota);
        }


    }


    public function verNotaDeAluno(string $titulo_da_Prova, Aluno $aluno)
    {

    }
}