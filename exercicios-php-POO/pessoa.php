<?php

class Pessoa {
    private $nome;
    private $idade;
    private $cpf;

    public function __construct($nome, $idade, $cpf) 
	{ 
	    $this->nome = $nome; 
	    $this->idade = $idade; 
		$this->cpf = $cpf; 
	    
    	echo "Nome {$nome} | Idade: {$idade} | CPF: {$cpf}<br>\n"; 
	}
}

$pessoa1 = new Pessoa('Bruno', 19, 1236547899);
$pessoa2 = new Pessoa('Vitor', 18, 1245547899);
$pessoa3 = new Pessoa('Thaina', 26, 4569547899);
$pessoa4 = new Pessoa('José Vitor', 26, 1286547899);
$pessoa5 = new Pessoa('Le', 50, 1236556899);

