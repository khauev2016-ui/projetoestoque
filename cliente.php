<?php

$email = $_POST['email'];
$cpf = $_POST['cpf'];

if (empty($email) || strlen($cpf) != 11) {
    echo "Dados inválidos";
} else {
    echo "Cliente cadastrado com sucesso";
}

?>