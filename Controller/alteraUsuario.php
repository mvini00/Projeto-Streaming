<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoUsuario.php');

extract($_REQUEST, EXTR_OVERWRITE);


if(alteraUsuario($conexao, $codusu, $loginusu, $senhausu, $pinusu)){
    echo("<p class='alert alert-primary' role='alert'>O dados do usuário foram alterados com sucesso!</p>");
}else{
    echo("<p class='alert alert-danger' role='alert'>Os dados do usuário não foram alterados!</p>");
}


include_once('../View/footer.php');

?>