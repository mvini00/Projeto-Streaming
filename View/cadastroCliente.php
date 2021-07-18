<?php
include('header.php');
?>

<div class="container">

  <form action="../Controller/inserirCliente.php" method="GET" class="row g-3">

    <div class="col-md-8">
      <label for="inputNome" class="form-label">Nome Completo:</label>
      <input type="text" name="nome" class="form-control" id="inputNome">
    </div>

    <div class="col-md-4">
      <label for="inputCPF" class="form-label">CPF:</label>
      <input type="text" name="cpf" class="form-control" id="inputCPF">
    </div>

    <div class="col-8">
      <label for="inputEmail" class="form-label">E-mail:</label>
      <input type="text" name="email" class="form-control" id="inputEmail" placeholder="">
    </div>
    <div class="col-md-4">
      <label for="inputFone" class="form-label">Fone:</label>
      <input type="text" name="fone" class="form-control" id="inputFone">
    </div>

    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>

</div>

</form>


<?php
include('footer.php');
?>