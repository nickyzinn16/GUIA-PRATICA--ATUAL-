<?php

    include 'connection.php';
    if (isset($_POST['send'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $name = $_FILES['file'];

        $file_name = $file['name'];
        $size = $file['size'];


    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload Page - Gestao de Arquivos</title>
    </head>
    <body>
        <header>
            <div>
                <h1>Sistema de Gestao de Arquivos - Carregar</h1>
            </div>
        </header>
        <main>
            <div>
                <form method="post" onsubmit="return validatData()">
                    <div>
                        <label for="name">Nome do arquivo</label>
                        <input required placeholder="Nome do arquivo" type="text">
                    </div>  

                    <div>
                        <label for="description">Descricao do arquivo</label>
                        <input required placeholder="Uma pequena descricao do arquivo" type="textarea">
                    </div>  
                    
                    <div>
                        <label for="file">Arquivo</label>
                        <input required placeholder="Nome do arquivo" type="textarea">
                    </div>  

                    <div>
                        <button type="submit" name="name">Enviar dados</button>
                    </div>  
            </div>

            <div>
                <a href="upload.php">Carregar novo arquivo</a>
            </div>

            <div>
                <a href="upload.php">Listar arquivos</a>
            </div>
        </main>

        <footer>

        </footer>
    </body>
</html>