<?php
class Veiculo {
    protected $modelo;
    public $cor;
    public $ano;

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }

    public function Andar(){
        echo "Andou";
    }
    public function Parar(){
        echo "Parou";
    }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando em 321";
    }
}

class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau em 321";
    }
}

$carro = new Carro();
$carro->setModelo("Gol");
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
echo "<br>";
$carro->ligarLimpador();
echo "<br>";
var_dump($carro);

$moto = new Moto();
$moto->setModelo("Biz");
$moto->cor = "Azul";
$moto->ano = 2015;
echo "<br>";
$moto->darGrau();
echo "<br>";
var_dump($moto);