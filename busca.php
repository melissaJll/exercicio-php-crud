<!-- require_once ""; -->
<?php

require_once "src/funcoes-utilitarias.php";
require_once "src/funcoes-alunos.php";

$nome = "%".trim($_GET['buscar'])."%";

if(isset($_GET['buscar'])){

    $listaAlunos = buscarAluno($conexao, $nome);
}   

//     var_dump($listaAlunos)
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>

<div class="container">
    <h1 class="text-center">Busca de alunos</h1>
    <hr>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->

    <table class="table">
        <thead>
            <tr>
                <th class="bg-danger">Id</th>
                <th class="bg-danger">Nome</th>
                <th class="bg-danger">Nota 1</th>
                <th class="bg-danger">Nota 2</th>
                <th class="bg-danger">Média</th>
                <th class="bg-danger">Situação</th>
                <th class="bg-danger" colspan="2" ></th>
            </tr>
        </thead>
        
 <tbody class="table-striped">
        <?php
        if (count($listaAlunos)) {
            foreach ($listaAlunos as $aluno) { ?>
                <tr >
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
                        <i class="fa-solid fa-pencil" style="color: #7662a5;"></i>
                    </td>
                         
                    <!-- Excluir -->
                    <td>
                        <a class="excluir" href="excluir.php?id=<?=$aluno["id"]?>">Excluir</a>
                        <i class="fa-solid fa-xmark" style="color: #7662a5;"></i>
                    </td>
                </tr>
                <?php
         }
            
        }
        else{?>
            <div class="not-found my-5 text-center">
                <p>Sem Resultados!</p>
                <i class="fa-regular fa-face-sad-tear fa-2xl my-1" style="color: #eb2d37;"></i>
            </div>
        <?php } ?>
 </tbody>
    </table>

    <!-- <p><a href="index.php">Voltar ao início</a></p> -->
    <div class="text-center my-3">
        <button type="button" class="btn btn-light">
            <i class="fa-solid fa-house" style="color: #ffffff;"></i>
            <a href="index.php">Voltar ao início</a></button>
        <button type="button" class="btn btn-secondary">
            <i class="fa-regular fa-plus" style="color: #f8f7f7;"></i>
            <a href="visualizar.php">Nova Busca</a>
        </button>
    </div>
</div>

<script src="js/confirmar-exclusao.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>