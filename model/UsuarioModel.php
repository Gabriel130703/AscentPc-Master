<?php

class UsuarioModel
{

    public $db = null; //conexao com banco
    public $id = 0;
    public $nomeCompleto = null;
    public $email = null;
    public $senha = null;

    public function __construct($conexaoBanco)
    {
        $this->db = $conexaoBanco;
    }

    public function cadastrar()
    {
        $retorno = ['status' => 0, 'dados' => null];
        try {
            $stmt = $this->db->prepare("
                INSERT INTO usuarios
                (nome_completo, email, senha)
                VALUES
                (:nome, :email, :senha)
            ");
            $stmt->bindValue(':nome', $this->nomeCompleto);
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->execute();
            $retorno['status'] = 1;
        } catch (PDOException $e) {
            echo 'Erro ao cadastrar usuario: ' . $e->getMessage();
        }
        return $retorno;
    }

    public function logar()
    {
        $retorno = [
            'status' => 0,
            'dados' => null
        ];
        try {
            $stmt = $this->db->prepare('
            SELECT id, email, nome_completo FROM usuarios
            WHERE email = :email
            AND senha = :senha
            LIMIT 1
            ');
            $stmt->bindValue(':email', $this->email);
            $stmt->bindValue(':senha', $this->senha);
            $stmt->execute();
            $dado = $stmt->fetch();

            if ($dado['id'] && $dado['id'] > 0) {
                $retorno['status'] = 1;
                $retorno['dados'] = $dado;
                session_start();
                $_SESSION['id'] = session_id();
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dado['id'];
                $_SESSION['usuario'] = $dado['email'];
                $_SESSION['nome_completo'] = $dado ['nome_completo'];
            }
        } catch (PDOException $ex) {
            echo 'Erro ao logar: ' . $ex->getMessage();
        }
        return $retorno;
    }
}
