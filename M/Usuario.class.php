<?php 
require_once("../M/BD.class.php");
class Usuario{
    static function login($login, $senha){

        $con = BD::conectar();

        $comando = $con->prepare('SELECT * FROM usuarios WHERE login = :a AND senha = :b');

    $comando->bindParam(':a', $login);
    $comando->bindValue(':b', md5($senha));

    $comando->execute(); 

    return $comando->fetch();
    }

    static function perfil($login, $senha){
        $con = BD::conectar();

        $comando = $con->prepare('SELECT * FROM perfil WHERE login = :a AND senha = :b');


    }
}