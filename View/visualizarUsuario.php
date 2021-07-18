<?php


include_once("../Model/bancoUsuario.php");
include_once("header.php");
include_once("../Model/conexao.php");
liberaAcesso();
?>


<div class="container">

    <form action="" method="POST" class="row g-3">

        <div class="col-12">
            <label class="form-label">Digite o Nome do Usuário:</label>
            <input type="text" required name="usuario" class="form-control">
        </div>

        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Localizar</button>
        </div>


    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Código do Usuário</th>
                <th scope="col">E-mail do Usuário</th>
                <th scope="col">Apagar</th>

            </tr>
        </thead>
        <tbody>
        
            <?php
            $usuario = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
            
            $dado = visuEmailUsuario($conexao, $usuario);
            
            foreach ($dado as $dados) :

            ?>
                <tr>
                    <th scope="row"><?= $dados["codusu"] ?></th>
                    <td><?= $dados["loginusu"] ?></td>
                    <td>
                        <form action="../Controller/deleteUsuario.php" method="Post">
                            <input type="hidden" name="codusu" value="<?= $dados["codusu"] ?>">
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            <?php
            endforeach
            ?>
        </tbody>
    </table>


    <?php
    include_once("footer.php");
    ?>