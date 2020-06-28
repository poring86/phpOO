<?php

class Pessoa {
    private $dados = [];
    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }
    public function __get($nome){
        return $this->dados[$nome];
    }

    public function __tostring(){
        return "Tentei imprimir o objeto";
    }

    public function __invoke(){
        return "Objeto como função";
    }
}

$pessoa = new Pessoa();
$pessoa->nome = "Matheus";
$pessoa->idade = "20";
$pessoa->sexo = "M";


echo $pessoa->nome;
echo $pessoa->idade;
echo $pessoa->sexo;

echo $pessoa;
echo $pessoa();