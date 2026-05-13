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
        <title>Document</title>
    </head>
    <body>
        <h1>Registrar uma nova conta</h1>
        <div>
            <form method="post">
                <div>
                    <label for="name">Nome Completo</label>
                    <input type="text" id="name" name="name" required placeholder="Insira o Seu nome completo"> 
                </div>
                <div>
                    <label for="email">Insira seu email</label>
                    <input type="email" id="email" name="email" required placeholder="Insira seu email"> 
                </div>
                <div>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required placeholder="Insira seu username"> 
                </div>
                <div>
                    <label for="password">Palavra Passe</label>
                    <input type="password" id="password" name="password" required placeholder="Insira sua palavra passe"> 
                </div>
                <div>
                    <button type="submit" name="register">Enviar dados</button>
                </div>
                <div>
                    <a href="login.php">Tenho uma conta, quero entrar</a>
                </div>
            </form>
        </div>
    </body>
</html>