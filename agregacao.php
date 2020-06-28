<?php
class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto){
            echo $produto->nome.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}

$produto1 = new Produtos("Notebook", "1500");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adciona($produto1);
$carrinho->adciona($produto2);

$carrinho->exibe();