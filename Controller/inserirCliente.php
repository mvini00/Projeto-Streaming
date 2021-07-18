
<?php

require_once("../Model/bancoCliente.php");
require_once("../Model/conexao.php");

extract($_REQUEST, EXTR_OVERWRITE);

if(insereCliente($conexao, $nome, $cpf, $email, $fone)){
    echo("Cliente cadastrado com sucesso");
}else{
    echo("O cliente não foi para o banco de dados");
}