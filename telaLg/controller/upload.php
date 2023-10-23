<?php
// local onde a imagem será salva
$destino = '../../imagens/';

// alocando o arquivo em uma variavel
$arquivo = $_FILES['arquivo']['name'];

// obtendo informações do arquivo
$caminhoArquivo = pathinfo($arquivo);

// variavel para alocar o nome do arquivo
$nomeArquivo = $_POST['nomeImage'];
// variavel para encontrar onde o arquivo está salvo temporariamente em nosso servidor (xampp)
$localTemporario = $_FILES['arquivo']['tmp_name'];

// variavel com o caminho completo onde desejamos salvar a imagem
$arquivoUpload = $destino . $nomeArquivo;

$retorno = ['status' => 0, 'message' => null];
if (file_exists($arquivoUpload)) {
    $retorno['message'] = 'O arquivo já existe! Use outro nome!';
} else {
    move_uploaded_file($localTemporario, $arquivoUpload);
    $retorno['message'] = 'Arquivo enviado com sucesso';
    $retorno['status'] = 1;
}

echo json_encode($retorno);
