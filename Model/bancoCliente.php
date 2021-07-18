<?php

function insereCliente($conexao, $nome, $cpf, $email, $fone){
    $query = "insert into tbcliente(nomecli, cpfcli, emailcli, fonecli) values('{$nome}', '{$cpf}', '{$email}', '{$fone}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;

};