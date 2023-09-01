<?php

require_once "src/funcoes-alunos.php";
require_once "src/funcoes-utilitarias.php";

$listaAlunos = lerAlunos($conexao);

// $quantidade = count($listaDeAlunos); nº de alunos

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->

    <table class="table table-success table-striped">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>
            <th>Situação</th>
            <th></th>
        </tr>
        
 <?php foreach ($listaAlunos as $aluno) { ?>
        <tr>
            <td><?=$aluno["id"]?></td>
            <td><?=$aluno["nome"]?></td>
            <td><?=$aluno["primeira"]?></td>
            <td><?=$aluno["segunda"]?></td>

            <!-- Média -->
            <td>
                <?=number_format($aluno["Média"],2)?>
            </td>

            <!-- Situação -->
            <td>
                <?=situacaoCor($aluno["Média"])?>
            </td>

            <!-- Alterações -->
            <td>
                <a href="atualizar.php?id=<?=$aluno["id"]?>">Editar </a>

                <a class="excluir" href="excluir.php?id=<?=$aluno["id"]?>">Excluir &#215;</a>

            </td> 
        </tr>
<?php }?>
    </table>


    <p><a href="index.php">Voltar ao início</a></p>
</div>

<script src="js/confirmar-exclusao.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>