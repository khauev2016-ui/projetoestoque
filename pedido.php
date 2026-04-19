<?php

$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

$total = $quantidade * $preco;

if ($quantidade <= 0) {
    echo "Quantidade inválida";
} else {
    echo "Pedido cadastrado. Total: " . $total;
}

?>