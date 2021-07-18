<?php
session_start();
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email = $_POST["email"];
$senha = $_POST["senha"];
$acesso = buscarAcesso($conexao, $email, $senha);

if ($acesso === $email) {
    switch ($_SESSION["retorno"]) {
        case '0':
            header("Location: ../View/promocao.php");
            break;
        case '1':
            header("Location: ../View/areaCliente.php");
            break;
        case '2':
            header("Location: ../View/areaEscolha.php");
            break;
        case '3':
            
            header("Location: ../View/areaFuncionario.php");
            break;

        default:
            header("Location: ../View/erro.php");
            break;
    }




    

} else {
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Os dados não conferem... Tente novamente!</div>";
    header("Location: ../View/acessoMain.php");

}

die();
