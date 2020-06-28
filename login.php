<?php
class Login{
    private $email;
    private $senha;
    private $nome;

    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->nome = $nome;
    }

    public function getNome(){
        return $this->nome;
    }


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar(){
        if($this->email == "teste@teste.com" && $this->senha == "123456"):
            echo "Logado com sucesso";
        else:
            echo "Dados inválidos";
        endif;
    }
}

// $logar = new Login();
// $logar->email = "teste@teste.com";
// $logar->senha = "1234567";
// $logar->Logar();

$logar = new Login("teste@teste.com", "123456", "Matheus Lino");
// $logar->setEmail("teste/;@teste.com");
// $logar->setSenha("123456");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo $logar->getSenha();
echo $logar->getNome();