<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFuncionario.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoUsuario($conexao, $codigo);
$filme = mysqli_fetch_assoc($resul);

?>

<div class="container">

  <form action="../Controller/alteraFuncionario.php" method="POST" class="row g-3">

  <div class="col-md-6">
      <label for="inputCodigo" class="form-label">Código Funcionário</label>
      <input type="text" readonly value="<?=$funcionario['codfun']?>" name="codfun" class="form-control" id="inputCodigo">
    </div>


    <div class="col-md-6">
      <label for="inputCodUsuario" class="form-label">Código Usuário</label>
      <input type="text" value="<?=$funcionario['codusuFK']?>"name="codusu" class="form-control" id="inputCodUsuario">
    </div>

    <div class="col-12">
      <label for="inputNome" class="form-label">Nome Funcionário</label>
      <input type="text" value="<?=$funcionario['nomefun']?>" name="nome" class="form-control" id="inputNome">
    </div>

    <div class="col-md-6">
      <label for="inputFone" class="form-label">Telefone Funcionário</label>
      <input type="text" value="<?=$funcionario['fonefun']?>" name="fone" class="form-control" id="inputFone">
    </div>
    <div class="col-md-6">
      <label for="inputFuncao" class="form-label">Função Funcionário</label>
      <input type="text" value="<?=$funcionario['funcaofun']?>" name="funcao" class="form-control" id="inputFuncao">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Alterar</button>
    </div>

</div>

</form>


<?php
include('footer.php');
?>