<!-- funcao que vai validar nome (nome nao vazio) e idade (idd deve  ser maior que 18 e nao superior a 85) -->

<?php
    function validateDatas($name, $age){
        if(empty($name))
            throw new Exception("O nome eh Obrigatorio!");

        if($age <= 0 || $age > 85)
            throw new Exception("Idade Invalido!");
        return true;
    }

    try {
        validateDatas("Ricardo", 18);
        echo("Dados bem vaidados");
    } catch(Exception $e){
        echo "Erro de Opracao". $e->getMessage();
    }


