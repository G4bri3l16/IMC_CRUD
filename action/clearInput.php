<?php
//GABRIEL DE SOUZA RODRIGUES (ALTERADO)

// Função para tratar caracteres especiais e de escape
function clear($input){
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}
