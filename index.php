<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício CRUD com PHP e MySQL</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <h1>Exercício - CRUD com PHP e MySQL</h1>
    <hr>
    <h2>Gerenciamento de alunos, notas, médias e aprovação/reprovação</h2>
    <hr>
    <div class="cards-index m-5">
        <a href="visualizar.php">
            <div class="card text-white bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h4 class="card-title">Visualizar Alunos</h4>
                    <i class="fa-solid fa-arrow-right" style="color: #ffffff;"></i>
                </div>
            </div>
        </a>

        <a a href="inserir.php">
            <div class="card text-white bg-light mb-3" style="max-width: 18rem;">
                <div class="card-body text-center">
                    <h4 class="card-title mb-4">Inserir novo aluno</h4>
                    <i class="fa-regular fa-plus fa-2xl" style="color: #fcfcfc;"></i>
                </div>
            </div>
        </a>
    </div>

    
    <ul>
        <li><a href="visualizar.php">Visualizar Alunos</a></li>
        <li><a href="inserir.php">Inserir novo aluno</a></li>
    </ul>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>