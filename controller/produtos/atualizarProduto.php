<?php

require_once('../../config/Conexao.php');
require_once('../../model/ProdutoModel.php');
//entrada
$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$id = $reqbody->idProduto;
$nome = $reqbody->nome;
$descricao = $reqbody->descricao;
$preco = $reqbody->preco;
//processamento
$conexao = new Conexao();
$db = $conexao->abrirConexao();
$produtoModel = new ProdutoModel($db);
$produtoModel->id = $id;
$produtoModel->nome = $nome;
$produtoModel->descricao = $descricao;
$produtoModel->preco = $preco;
$retorno = $produtoModel->atualizar();

//saida
echo json_encode($retorno);
