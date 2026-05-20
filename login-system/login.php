<?php
    session_start();
    include 'connection.php';

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $user_data = $conn->query($sql);

        if ($user_data->num_rows > 0){
            $user = $user_data->fetch_assoc();
            if (!$user['status'])
                echo("A sua conta foi desativada");
            else{
                if(password_verify($password, $user['password'])){
                    $_SESSION['username'] = $user['username'];
                    header("Location: dashboard.php");
                    exit();
                } else {
                    echo("A senha inserida nao eh valida");
                }
            }
        } else {
            echo("O utilizador nao foi encontrado no sistema.");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <section class="login">
            <div class="imagem"></div>
            <div class="formulario">
                <h1>Entrar no sistema</h1>
                <form method="post">
                    <div class="campo">
                        <label for="email">Insira o seu email:</label>
                        <input type="email" id="email" name="email" required placeholder="Insira o seu email"> 
                    </div>
                    <div class="campo">
                        <label for="password">Insira a sua palavra passe:</label>
                        <input type="password" id="password" name="password" required placeholder="Insira a sua palavra passe"> 
                    </div>
                    <div class="campo">
                        <button type="submit" name="login">Entrar no sistema</button>
                    </div>
                    <div class="campo">
                        <a href="register.php">Não tem uma conta? Registra-te</a>
                    </div>
                </form>
            </div>

        </section>
    </body>
</html>