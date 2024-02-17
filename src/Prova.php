<?php

class Prova
{
    private readonly int $nota;
    public readonly string $nome;
    public readonly string $conteudo;
    
    public function __construct(
        public readonly string $materia,
        public readonly string $professor,
        public readonly string $titulo
        )
    {
    }


    //* Setter de $nome e $conteudo
    public function marcarResposta(string $nome, $resposta ): void
    {
        $this->nome = $nome;
        $this->conteudo = $resposta;
    }


    //* Setter de $nota pelo professor
    public function marcarNota(int $avaliacao): void
    {
        $this->nota = $avaliacao;
    }

}
