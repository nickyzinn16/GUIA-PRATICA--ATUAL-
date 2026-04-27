<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form method="POST">
            <div>
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" placeholder="Nome" required>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" required>
            </div>

            <div>
                <label for="comment">Comentario</label>
                <input type="text" id="comment" name="comment" placeholder="comment" required>
            </div>

            <button type="submit">Enviar</button>
        </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
           $name = $_POST["name"]; 
           $email = $_POST["email"]; 
           $comment = $_POST["comment"];

           echo "<p><strong>$name</strong><br>Email: $email <br>Coementario: $comment </p>"
        }
    ?>
    </body>
</html>