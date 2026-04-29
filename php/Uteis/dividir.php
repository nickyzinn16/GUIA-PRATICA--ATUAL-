<?php
    function dividir($num1, $num2){
        try {
            return $num1/$num2;
        }
        catch(Exception $e){
        echo("Erro de operacao: ".$e->getMessage());
        }
    }

    dividir(20, 2);
?>

