<?php
require_once "src/funcoes-alunos.php";
require_once "src/funcoes-utilitarias.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

$aluno = lerAluno($conexao, $id);

if(isset($_POST["atualizar-dados"])){
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $primeira = filter_input(INPUT_POST, "primeira", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $segunda = filter_input(INPUT_POST, "segunda", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    atualizarAluno($conexao, $id, $nome, $primeira, $segunda);

    header("location:visualizar.php?status=sucesso");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Atualizar dados do aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

    <form action="#" method="post">
        
	    <p><label for="nome">Nome:</label>
	    <input type="text" name="nome" id="nome" value="<?=$aluno["nome"]?>" required></p>
        
        <p><label for="primeira">Primeira nota:</label>
	    <input class="primeira" name="primeira"  type="number" id="primeira" step="0.01" min="0.00" max="10.00" value="<?=$aluno["primeira"]?>" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input class="segunda" name="segunda" type="number" id="segunda" step="0.01" min="0.00" max="10.00" value="<?=$aluno["segunda"]?>" required></p>

        <p>
        <!-- Campo somente leitura e desabilitado para edição.
        Usado apenas para exibição do valor da média -->
            <label for="media">Média:</label>
            <input class="media" name="media" type="number" id="media" step="0.01" min="0.00" max="10.00" value="<?=number_format($aluno["Média"],2)?>" readonly disabled>
        </p>

        <p>
        <!-- Campo somente leitura e desabilitado para edição 
        Usado apenas para exibição do texto da situação -->
            <label for="situacao">Situação:</label>
	        <input class="situacao" type="text" name="situacao" id="situacao" value="<?=situacaoAluno($aluno["Média"])?>" readonly disabled>
        </p>
	    
        <button name="atualizar-dados" class="btn btn-light" name="cadastrar">
	  	<i class="fa-regular fa-plus" style="color: #f8f7f7;"></i>
            <b>Atualizar dados do aluno</b>
        </button>
	</form>    
    
    <hr>
    <p>
        <a href="visualizar.php">Voltar à lista de alunos</a>
        <i class="fa-solid fa-list" style="color: #7662a5;"></i>
    </p>

</div>



<script src="js/mostrar-media.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>