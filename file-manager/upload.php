<?php

    include 'connection.php';
    $error_message = "";
    $sucess_message = "";
    $file_extension = "nada por ainda";

    if (isset($_POST['send'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $file = $_FILES['file'];

        $file_name = $file['name'];
        $file_tmp_name = $file['tmp_name'];
        $size = $file['size'];

        $file_aditional = "Dados de teste";

        // Tratamento e validacao de arquivos
        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

        $permitted_extensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

        if(!in_array(strtolower($file_extension), $permitted_extensions)){
            $error_message = "Arquivo nao suportado pelo sistema";
        } else {
            if($size > 10*1024*1024){
                $error_message = "Arquivo muito grande";
            } else {
                $new_file_name = time().'_'.$file_name;

                $destination = "uploads/".$new_file_name;

                if(move_uploaded_file($file_tmp_name, $destination)){
                    // Implementacao para a base de dados
                    $sucess_message = "Enviado com sucesso.";
                } else {
                    $error_message = "Ocorreu um erro durante o processo.";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt">
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
                <?php echo $error_message; ?>
                <?php echo $sucess_message; ?>
            </div>
            <div>
                <form method="post" enctype="multipart/form-data">
                    <div>
                        <label for="name">Nome do arquivo</label>
                        <input required placeholder="Nome do arquivo" type="text" name="name" id="name">
                    </div>  

                    <div>
                        <label for="description">Descricao do arquivo</label>
                        <textarea required placeholder="Uma pequena descricao do arquivo" name="description" id="description"></textarea>
                    </div>  
                    
                    <div>
                        <label for="file">Arquivo</label>
                        <input required type="file" name="file" id="file">
                    </div>  

                    <div>
                        <button type="submit" name="send">Enviar dados</button>
                    </div>
                </form>  
            </div>

            <div>
                <a href="upload.php">Carregar novo arquivo</a>
            </div>

            <div>
                <a href="list.php">Listar arquivos</a>
            </div>
        </main>

        <footer>
            <p>Todos os direitos autorais reservados</p>
        </footer>
    </body>
</html>