<?php
function inserirAlunos(PDO $conexao, string $nome, float $primeira, float $segunda){

    $sql= "INSERT INTO alunos(nome, primeira, segunda) VALUES (:nome, :primeira, :segunda)";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta ->bindValue(":nome", $nome, PDO::PARAM_STR );
        $consulta ->bindValue(":primeira", $primeira, PDO::PARAM_STR );
        $consulta ->bindValue(":segunda", $segunda, PDO::PARAM_STR);

        $consulta-> execute();

    } catch (Exception $erro) {
        die("Erro ao inserir". $erro-> getMessage());
    }
}

?>