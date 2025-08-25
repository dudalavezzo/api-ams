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
        $dados_recebidos = json_decode(file_get_contents("php://input"), true)
        break;
    case "GET":
        echo "{ 'Veio do navegador";
        break;
}