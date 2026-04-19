<?php

$cnpj = $_POST['cnpj'];

if (strlen($cnpj) != 14) {
    echo "CNPJ inválido";
} else {
    echo "Fornecedor cadastrado com sucesso";
}

?>