<?php
function validarNome($nome) {
    if (empty($nome)) {
        return "O nome nao pode estar vazio.";
    }

    $tamanho = strlen($nome);
    if ($tamanho < 4 || $tamanho > 20) {
        return "O nome tem que ter mais de 4 e menos de 20 carateres";
    }

    $letrasValidas = ('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
    $primeiraletra = $nome[0];

    if (in_array($primeiraletra, $letrasValidas)) {
    echo "A primeira letra de $nome eh Maiuscula";
    }

    return "Nome valido";
}
?>