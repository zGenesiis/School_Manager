<?php
/*
? Future upgrades on the code: Nest here an class for the Tessts:
? -- Control of good an bad grades
? -- Date and type of the test
? -- Other possible features
*/


class Student //* CREATE CLASS STUDENT
{
    public string $name; //* NAME OF THE STUDENT
    public array $grades; //* THE GRADES ALONG THE YEAR (key = date, value = grade)
    public int $abscences = 0; //* NUMBER OF ABASCENCES ALONG THE YEAR
    public function __construct($name)
    {
        $this->name = $name;
        echo "Novo aluno adicionado com sucesso" . PHP_EOL;
    }



}