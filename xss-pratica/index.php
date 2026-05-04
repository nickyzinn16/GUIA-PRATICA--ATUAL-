
<?php include 'conexao.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Apresente o seu comentario/feedback sobre o sistema</h1>
    <form method='POST'>
        <div>
            <label for="name">Nome</label>
            <input type="text" name='name' id='name'>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name='email' id='name'>
        </div>
        <div>
            <label for="comment">Comentario</label>
            <textarea name="comment" id="comment"></textarea>
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];     

            $sql = "INSERT INTO feedbacks (name, email, comment) VALUES ('$name', '$email', '$comment')";
            $conn->query($sql);
        }
        $result = $conn->query("SELECT * FROM feedbacks");

        while ($row = $result->fetch_assoc()){
            echo "<p>".$row['comment']."</p>";
        }
    ?>
</body>
</html>