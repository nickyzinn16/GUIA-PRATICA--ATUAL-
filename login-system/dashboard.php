<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>dashboard</title>
    </head>
    <body>
        <div>
            <h1>Seja muito bem vindo ao dashoar da nossa plataforma</h1>
            <p><?php echo Mrs.$_SESSION['username'];?></p>
        </div>
    </body>
</html>