<?php
class Pessoa{
    const nome = "Matheus";
    public function exibirNome(){
        echo self::nome;
    }
}

class Yasmim extends Pessoa{
    const nome = "Yasmim";
    public function exibirNome(){
        echo parent::nome;
    }
}
$pessoa = new Pessoa();
$pessoa->exibirNome();

$yasmim = new Yasmim();
$yasmim->exibirNome();