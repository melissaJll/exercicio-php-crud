<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_escola_melissa";

try {
//Conexão com Objeto PDO
    $conexao = new PDO(
        "mysql:host=$servidor;
        dbname=$banco;
        charset=utf8",
         $usuario, $senha
    );

    $conexao->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION
    ); 

} catch (Exception $erro) { 
    die("Erro!!! :".$erro->getMessage());
}
 

?>