<?php
class Login {
    public static $user;

    public static function verificaLogin(){
        echo "O usuário ".self::$user." está logado!";
    }
}

Login::$user = "admin";
Login::verificaLogin();