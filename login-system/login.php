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
    </head>
    <body>
        <h1>Entrar no sistema</h1>
        <div>
            <form method="post">
                <div>
                    <label for="email">Insira seu email</label>
                    <input type="email" id="email" name="email" required placeholder="Insira seu email"> 
                </div>
                <div>
                    <label for="password">Palavra Passe</label>
                    <input type="password" id="password" name="password" required placeholder="Insira sua palavra passe"> 
                </div>
                <div>
                    <button type="submit" name="login">Entrar no sistema</button>
                </div>
                <div>
                    <a href="register.php">Nao tenho uma conta. Registar</a>
                </div>
            </form>
        </div>
    </body>
</html>