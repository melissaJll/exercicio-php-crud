<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_escola_melissa";

//Conexão com Objeto PDO
try {
    $conexão = new PDO(
        "mysql:host=$servidor;
        dbname=$banco; 
        charset=utf8",
        $usuario, $senha
    );

    //Habilita sinalização de erros
    $conexao->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION
    ); 

} catch (Exception $erro) {
    die("Erro". $erro->getMessage());
}

?>