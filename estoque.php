<?php

$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];

if ($quantidade <= 0) {
    echo "Quantidade inválida";
} else {
    if ($tipo == "saida") {
        echo "Saída registrada";
    } else {
        echo "Entrada registrada";
    }
}

?>