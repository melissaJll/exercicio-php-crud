<?php
require_once "conecta.php";

function inserirAlunos(PDO $conexao, string $nome, float $primeira, float $segunda): void{

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


function lerAlunos(PDO $conexao): array{

    $sql = "SELECT id, nome, primeira, segunda, (primeira+segunda)/2 as 'Média' FROM alunos ORDER BY nome";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta -> execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $erro) {
        die("Erro ao carregar os dados dos alunos!". $erro->getMessage());
    }
    return $resultado;
}
function buscarAluno(PDO $conexao, string $nome): array{
    $sql = "SELECT id, nome, primeira, segunda, (primeira+segunda)/2 as 'Média' FROM alunos
    WHERE nome LIKE :nome";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta ->bindValue(":nome", $nome, PDO::PARAM_STR );

        $consulta -> execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (Exception $erro) {
        die("Nenhuma busca". $erro->getMessage());
    }
    return $resultado;
}

//Vizualização nos input de atualizar.php
function lerAluno(PDO $conexao, int $id): array{

    // $sql = "SELECT * FROM alunos WHERE id=:id";
    $sql = "SELECT id, nome, primeira, segunda, (primeira+segunda)/2 as 'Média' FROM alunos WHERE id=:id";

    try {
        $consulta = $conexao->prepare($sql);

        $consulta->bindValue(":id", $id, PDO::PARAM_INT);

        $consulta->execute();

        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);


    } catch (Exception $erro) {
        die("Erro ao trazer os dados do aluno". $erro->getMessage());
    }
    return $resultado;

}

function atualizarAluno(PDO $conexao, int $id, string $nome, float $primeira, float $segunda):void{

    $sql = "UPDATE alunos SET nome = :nome, primeira = :primeira, segunda = :segunda WHERE id=:id";

    try {
        
        $consulta = $conexao->prepare($sql);

        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":primeira", $primeira, PDO::PARAM_STR);
        $consulta->bindValue(":segunda", $segunda, PDO::PARAM_STR);

        $consulta->execute();


    } catch (Exception $erro) {
        die("Erro ao atualizar os dados". $erro->getMessage());
    }

}

function excluirAluno(PDO $conexao, int $id):void{
    $sql = "DELETE FROM alunos WHERE id=:id";

try {
    $consulta = $conexao->prepare($sql);

    $consulta->bindValue(":id", $id, PDO::PARAM_INT);

    $consulta->execute();

} catch (Exception $erro) {
    die("Erro na exclusão do aluno". $erro->getMessage());
}


}

?>