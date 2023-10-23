<?php

require_once('../../config/Conexao.php');
require_once('../../model/ProdutoModel.php');
// entrada
$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$nome = $reqbody->nome;
$descricao = $reqbody->descricao;
$preco = $reqbody->preco;
$imagem = $reqbody->imagem;
//processamento
$conexao = new Conexao();
$db = $conexao->abrirConexao();
$produtoModel = new ProdutoModel($db);
$produtoModel->nome = $nome;
$produtoModel->descricao = $descricao;
$produtoModel->preco = $preco;
$produtoModel->imagem = $imagem;

$retorno = $produtoModel->cadastrarProduto();
// saida
echo json_encode($retorno);
