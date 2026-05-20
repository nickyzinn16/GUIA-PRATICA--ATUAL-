<?php
    include 'connection.php';
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $status = true;
        $sql = "INSERT INTO users (name, email, username, password, status) VALUES ('$name', '$email', '$username', '$password', '$status')";
        if($conn->query($sql)){
            echo("Utilizador registrado com sucesso!");
        } 
        else {
            echo("Erro da operacao!");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="register.css">
        <title>Registrar</title>
    </head>
    <body>
        <div class="container">
            <h1>Registrar uma nova conta</h1>
            <form method="post">
                <div>
                    <label for="name">Nome completo:</label>
                    <input type="text" id="name" name="name" required placeholder="Insira o Seu nome completo"> 
                </div>
                <div>
                    <label for="email">Insira seu email:</label>
                    <input type="email" id="email" name="email" required placeholder="Insira seu email"> 
                </div>
                <div>
                    <label for="username">Insira seu username:</label>
                    <input type="text" id="username" name="username" required placeholder="Insira seu username"> 
                </div>
                <div>
                    <label for="password">Insira sua palavra passe:</label>
                    <input type="password" id="password" name="password" required placeholder="Insira sua palavra passe"> 
                </div>
                <div>
                    <button type="submit" name="register">Enviar dados</button>
                </div>
                <div>
                    <a href="login.php">Tenho uma conta? Faça Login</a>
                </div>
            </form>
        </div>
    </body>
</html>