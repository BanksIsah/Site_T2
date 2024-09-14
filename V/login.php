<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    <form action="../C/login.php" method="POST">
        <input type="text" placeholder="Login" required name="login">
        <input type="password" placeholder="Senha" required name="senha">
        <input type="submit">
    
        <?php
            if (isset($mensagem) ){
                echo "<div>$mensagem</div>";
            }
        ?>
    
    </form>
</body>
</html>