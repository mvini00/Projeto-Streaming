<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once("header.php");
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");

?>

<div class="container">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o Nome do Funcionário </label>
            <input type="text" class="form-control" name="nomefuncionario">
        </div>
        <div class="col-12">
            <label class="form-label"> Escolha a função do Funcionário </label>
            <select name="funcaofuncionario" class="form-select form-select" aria-label=".form-select-lg example">
                <option value="" selected>Escolha a função</option>
                <option value="Gerente">Gerente</option>
                <option value="Operador">Operador</option>

            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary"> Localizar </button>
        </div>

    </form>
    <?php
    $nomefuncionario = isset($_POST["nomefuncionario"]) ? $_POST["nomefuncionario"] : "";
    $funcaofuncionario = isset($_POST["funcaofuncionario"]) ? $_POST["funcaofuncionario"] : "";

    if (!$nomefuncionario and !$funcaofuncionario) {
        echo ("<p class='text-center fw-bold'> Complete os filtros acima!</p>");
    } else {

    ?>
        <div class="border m-4 rounded">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Fone</th>
                        <th scope="col">Função</th>
                        <th scope="col">Alterar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $dado = visuNomeFuncaoFuncionario($conexao, $nomefuncionario, $funcaofuncionario);

                    foreach ($dado as $dados) :
                    ?>
                        <tr>
                            <th scope="row"><?= $dados["codfun"] ?></th>
                            <td><?= $dados["nomefun"] ?></td>
                            <td><?= $dados["fonefun"] ?></td>
                            <td><?= $dados["funcaofun"] ?></td>

                            <td>
                                <a class="btn btn-primary" href="alterarFuncionario.php?codigo=<?= $dados["codfun"] ?>">Alterar</a>
                            </td>

                            <td>
                                <form method="get" action="#">
                                    <input type="text" name="codfun" value="<?= $dados["codfun"] ?>">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Deletar</button>
                                </form>
                            </td>


                        </tr>
                <?php
                    endforeach;
                    echo ("</div>");
                }

                ?>
                <div class="modal fade" id="exampleModal" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo apagar?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <?php
                                $r = isset($_GET["codfun"]) ? $_GET["codfun"] : "";

                                ?>
                                <form action="../Controller/deleteFuncionario.php" method="GET">
                                    <input type="hidden" name="codfun" value="<?= $r ?>">
                                    <button type="submit" class="btn btn-danger">Deletar</button>
                                </form>



                            </div>
                        </div>
                    </div>
                </div>
                </tbody>
            </table>


            <?php

            include_once("footer.php");


            ?>