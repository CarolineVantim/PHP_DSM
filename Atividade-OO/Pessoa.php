<?php 

class Pessoa 
{ 
	private $nome; 
	private $cpf; 
	private $endereco; 
	private $caracteristicas; 
	 
	public function __construct(string $nome, int $cpf, string $endereco) 
	{ 
	    $this->nome = $nome; 
	    $this->cpf = $cpf; 
	    $this->endereco = $endereco;
	} 

	public function getNome() 
	{ 
	    return $this->nome; 
	} 

	public function getCpf() 
	{ 
	    return $this->cpf; 
	} 

	public function getEndereco() 
	{ 
	    return $this->endereco; 
	}

    public function setNome($nome) 
	{ 
	   $this->nome = $nome;
	}

    public function setCpf($cpf) 
	{ 
	    $this->cpf = $cpf;
	}  

    public function setEndereco($endereco) 
	{ 
        $this->endereco = $endereco;
	}   
	
	public function addCaracteristica( $nome, $valor ) 
	{ 
	    $this->caracteristicas[] = new Salavirtual($nome, $valor); 
	}

	public function getCaracteristicas() 
	{ 
	    return $this->caracteristicas; 
	}
}