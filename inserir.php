<?php


if(isset($_POST['cadastrar'])){

	require_once "src/funcoes-alunos.php";

	$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

	$primeira = filter_input(INPUT_POST, "primeira", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	$segunda = filter_input(INPUT_POST, "segunda", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

	inserirAlunos($conexao, $nome, $primeira, $segunda);

	header("location:visualizar.php");
};
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

	<form action="#" method="post">
	    <p><label for="nome">Nome:</label>
	    <input type="text" id="nome" name="nome" required></p>
        
      <p><label for="primeira">Primeira nota:</label>
	    <input type="number" id="primeira" step="0.01" min="0.00" max="10.00" required name="primeira"></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input type="number" id="segunda" name="segunda" step="0.01" min="0.00" max="10.00" required></p>
	    
      <button class="btn btn-light" name="cadastrar">
	  	<i class="fa-solid fa-plus" style="color: #f8f7f7;"></i>
	  	<b>Cadastrar aluno</b>
		</button>
	</form>

    <hr>
    <p>
		<i class="fa-solid fa-house" style="color: #7662a5;"></i>
		<a href="index.php">Voltar ao início</a>
	</p>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>