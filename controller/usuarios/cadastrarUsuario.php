<?php

require_once('../../config/Conexao.php');
require_once('../../model/UsuarioModel.php');
// entrada
$json = file_get_contents('php://input');
$reqbody = json_decode($json);
$nomeCompleto = $reqbody->nomeCompleto;
$email = $reqbody->email;
$senha = $reqbody->senha;
//processamento
$conexao = new Conexao();
$db = $conexao->abrirConexao();
$usuarioModel = new UsuarioModel($db);
$usuarioModel->nomeCompleto = $nomeCompleto;
$usuarioModel->email = $email;
$usuarioModel->senha = $senha;

$retorno = $usuarioModel->cadastrar();
// saida
echo json_encode($retorno);
