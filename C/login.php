<?php 
require_once("../M/BD.class.php");

$logado = false;

if($_SERVER['REQUEST_METHOD'] === "GET") {
    include "../V/login.php";
}
else{
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    

    $con = BD::conectar();

    $comando = $con->prepare('SELECT * FROM usuarios WHERE login = :a AND senha = :b');

    $comando->bindParam(':a', $login);
    $comando->bindValue(':b', md5($senha));

    $comando->execute(); 

    $perfil_id = $con->prepare('SELECT perfil_id FROM usuarios WHERE login = :a AND senha = :b');

    $comando->bindParam(':a', $login);
    $comando->bindValue(':b', md5($senha));

    $linhas = $comando->rowCount();
    
    if($linhas == 1) {
        include '../V/menu.php';
    }
    else{
        $mensagem = 'Login ou senha incorretos!';
       include '../V/login.php';
    }

}