<?php
class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo $this->nome." de ".$this->idade." acabou de falar";
    }
}

$matheus = new Pessoa();
$matheus->nome = "Matheus de Lino";
$matheus->idade = 25;
$matheus->Falar();