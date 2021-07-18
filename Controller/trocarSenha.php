<?php

session_start();
include_once("../Model/conexao.php");
include_once("../Model/bancoUsuario.php");

$email = $_POST ["email"]; 
$pin = $_POST ["pin"];
//olhar aqui abaixo pode ser o erro
$novasenha = $_POST ["senha"];
$info = trocarsenhausuario($conexao,$email,$novasenha,$pin);

if($info === "erro"){
    $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Os dados não conferem... Tente novamente!</div>";
    header("Location: ../View/formEsqueciSenha.php");
}else{
    $_SESSION["msg"] = "<div class='alert alert-success' role='alert'>Sua senha foi alterada com sucesso!</div>";
    header("Location: ../View/acessoMain.php");
}

?>