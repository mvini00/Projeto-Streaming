<?php

include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");

$email = isset($_POST["email"])?$_POST["email"]:"";

if(buscarUsuario($conexao,$email)){
   
    header("Location: ../View/cadastroFuncionario.php");
     
    
}else{
    echo("não deu certo");
}