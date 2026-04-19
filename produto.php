<?php

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];

if (empty($nome) || $preco <= 0 || $quantidade < 0) {
    echo "Dados inválidos";
} else {
    echo "Produto cadastrado com sucesso";
}

?>