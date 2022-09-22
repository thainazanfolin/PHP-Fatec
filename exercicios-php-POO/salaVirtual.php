<?php

class SalaVirtual{

    private $alunos;
    private $tema;
    private $professor;
    private $faculdade;
    
    public function __construct ($alunos, $tema, $professor, $faculdade) 
	{ 
	    if (is_numeric($alunos) AND $alunos >0) { 
	        $this->alunos = $alunos; 
	    } 
	    if (is_string($tema)) { 
	        $this->tema = $tema; 
	    } 
	    if (is_string($professor)) { 
	        $this->professor = $professor; 
	    } 

        if (is_string($faculdade)) { 
	        $this->faculdade = $faculdade; 
	    } 

		echo "<br> Tema da aula: {$tema} <br>";
		echo "Número de alunos: {$alunos} <br>";
		echo "Professor: {$professor} <br> ";
		echo "Faculdade: {$faculdade} <br> ";
		echo "_____________________________________ <br> ";
}
}

echo "///   RELAÇÃO DOS CURSOS OFERECIDOS   /// <br>";

$salaVirtual = new SalaVirtual(25, 'Dev Web', 'Orlando', 'FATEC');
$salaVirtua2 = new SalaVirtual(40, 'Logica e algoritmos', 'Nilton', 'FATEC');
