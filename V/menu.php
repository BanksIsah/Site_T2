<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <a href="cadastro.php" >Cadastrar |</a>
    <a href="listagem.php" > Listar |</a>
    <a href="login.php" > Sair</a>

    <?php 
    require_once("../M/BD.class.php");

        function perfil_id($perfil_id){
            if($perfil_id == 1){
                echo 'estudante';
            }
            else if($perfil_id == 2){
                echo   'professor';
            }
        }
    ?>  
</body>
</html>


