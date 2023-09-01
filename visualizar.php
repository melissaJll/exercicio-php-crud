<?php

require_once "src/funcoes-alunos.php";

$listaAlunos = lerAlunos($conexao);

// $quantidade = count($listaDeAlunos); nº de alunos

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
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

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Média</th>
            <th></th>
        </tr>
        
 <?php foreach ($listaAlunos as $aluno) { ?>
        <tr>
            <td><?=$aluno["id"]?></td>
            <td><?=$aluno["nome"]?></td>
            <td><?=$aluno["primeira"]?></td>
            <td><?=$aluno["segunda"]?></td>

            <!-- Média -->
            <!-- <td>

                <//?=calculoMedia($itemAluno["primeira"], $itemAluno["segunda"])?>

            </td> -->

            <td>
                <a href="atualizar.php?id=<?=$itemAluno["id"]?>">Editar</a>

                <a class ="excluir" href="deletar.php?id=<?=$itemAluno["id"]?>">Excluir</a>
            </td> 
        </tr>
<?php }?>
    </table>


    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>