<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include("header.php");
?>

<div class="container">

    <form action="../Controller/inserirUsuario.php" method="POST" class="row g-3">

        <div class="col-12">
            <label for="inputLogin" class="form-label">E-mail</label>
            <input type="email" required name="e-mail" class="form-control" id="inputLogin">
        </div>

        <div class="col-md-6">
            <label for="inputSenha" class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control" id="inputSenha">
        </div>

        <div class="col-md-6">
            <label for="inputPin" class="form-label">PIN (Número com 5 dígitos)</label>
            <input type="number" min="00001" max="99999" name="pin" class="form-control" id="inputPin">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Salvar</button>

        </div>

    </form>

</div>

<?php

include("footer.php");


?>