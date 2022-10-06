<?php

class Salavirtual 
{ 
	public $nome; 
	public $qtd_membro; 
	 
	public function __construct( string $nome, $qtd_membro) 
	{ 
	   $this->nome = $nome;
       $this->qtd_membro = $qtd_membro;

	} 

	public function getNome() 
	{ 
	    return $this->nome; 
	} 

	public function getQtdmembro() 
	{ 
	    return $this->qtd_membro;
	}

    public function setNome($nome) 
	{ 
	   $this->nome = $nome;
	}

    public function setQtdmembro($quantidade) 
	{ 
	    $this->qtdmembro = $quantidade;
	}
	
}