<?php
/* CABEÇALHOS do HTTP */
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

/*
Essa variável recbe o método utilizado
pode ser POST, GET, PUT ou DELETE
*/
$metodoSolicitado = $_SEVER['REQUEST_METHOD'];

/*Esse Id é quando colocamos informações na URL*/
$id     = $_GET['id'] ?? null;

/*
?? significa que se $_GET['id'] existir e nao for nula
o conteudo entra na variavel id
*/

switch($metodoSolicitado){
    case "POST":
        $dados_recebidos = json_decode(file_get_contents("php://input"), true);
        break;
    case "GET":
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $banco = "aula_pw3";

        $conexao = new mysqli($servidor, $usuario, $senha, $banco);

        $sql = "Select * from materias";

        $resultado = $conexao->query($ql);

        while ($linha = $resultado-> fetch_assoc()) {
            $materias[] = $linha;
        }

        echo json_encode($resultado-> fetch_assoc());
        break;
}