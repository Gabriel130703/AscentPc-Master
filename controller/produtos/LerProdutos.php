<?php

require_once('../../config/Conexao.php');
require_once('../../model/ProdutoModel.php');
//entrada
$json = file_get_contents('php://input');
$reqbody = json_decode($json);

//processamento
$conexao = new Conexao();
$db = $conexao->abrirConexao();
$produtoModel = new ProdutoModel($db);
$retorno = $produtoModel->lerTodos();

//saida
echo json_encode($retorno);
