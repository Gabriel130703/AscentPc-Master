<?php

class ProdutoModel
{

    public $db = null; //conexao com banco
    public $id = 0;
    public $nome = null;
    public $descricao = null;
    public $preco = null;

    public function __construct($conexaoBanco)
    {
        $this->db = $conexaoBanco;
    }

    public function listarProdutosPeloID()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $stmt = $this->db->prepare('
                SELECT * FROM produtos
                WHERE id = :id');
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
            $dados = $stmt->fetchAll();
            $retorno['status'] = 1;
            $retorno['dados'] = $dados;
        } catch (PDOException $e) {
            echo 'Erro ao mostrar produto pelo ID: ' . $e->getMessage();
        }
        return $retorno;
    }

    public function listarProdutos()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $stmt = $this->db->prepare('
                SELECT * FROM produtos');
            $stmt->execute();
            $dados = $stmt->fetchAll();
            $retorno['status'] = 1;
            $retorno['dados'] = $dados;
        } catch (PDOException $e) {
            echo 'Erro ao mostrar produto pelo ID: ' . $e->getMessage();
        }
        return $retorno;
    }

    public function cadastrarProduto()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $stmt = $this->db->prepare(
                "INSERT INTO produtos (nome, descricao, preco, imagem) VALUES (:nome, :descricao, :preco, :imagem)"
            );
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':descricao', $this->descricao);
            $stmt->bindValue(':preco', $this->preco);
            $stmt->bindValue(':imagem', $this->imagem);
            $stmt->execute();
            $retorno['status'] = 1;
        } catch (PDOException $e) {
            echo 'Erro ao cadastrar produto: ' . $e->getMessage();
        }
        return $retorno;
    }

    public function atualizar()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $stmt = $this->db->prepare('
                UPDATE produtos SET
                nome = :nome,
                descricao = :descricao,
                preco = :preco
                WHERE id = :id
            ');
            $stmt->bindValue(':id', $this->id);
            $stmt->bindValue(':nome', $this->nome);
            $stmt->bindValue(':descricao', $this->descricao);
            $stmt->bindValue(':preco', $this->preco);
            $stmt->execute();
            $retorno['status'] = 1;
        } catch (PDOException $e) {
            echo 'Erro ao atualizar Produto: ' . $e->getMessage();
        }
        return $retorno;
    }

    public function deletar()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $stmt = $this->db->prepare("
                DELETE FROM produtos
                WHERE id = :id
            ");
            $stmt->bindValue(':id', $this->id);
            $stmt->execute();
            $retorno['status'] = 1;
        } catch (PDOException $e) {
            echo 'Erro ao deletar produtos: ' . $e->getMessage();
        }
        return $retorno;
    }

    public function lerTodos()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $query = $this->db->query('SELECT * FROM produtos');
            $dados = $query->fetchAll();
            $retorno['status'] = 1;
            $retorno['dados'] = $dados;
        } catch (PDOException $e) {
            echo 'Erro ao listar todas as produtos: ' . $e->getMessage();
        }
        return $retorno;
    }
}
