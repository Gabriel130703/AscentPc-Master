<?php
session_start();
?>
<!DOCTYPE html5>
<html>

<head>
    <title>Pagina</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--===============================================================================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--===============================================================================================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!--===============================================================================================-->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css2/style.css" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .content {

            width: 85vw;
            overflow-y: auto;
            padding: 5vh 1vw;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex align-items-center justify-content-center" style="background-color: red;">
        <div class="content bg-light">

            <nav class="navbar navbar-expand-lg navbar-dark " style="background-color:black;">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#subnav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="subnav">
                    <ul class="navbar-nav">
                        <a class="nav-link active" href="produtos.php">
                            Produtos
                        </a>
                        <a class="nav-link" href="index.php">
                            Sair
                        </a>
                    </ul>
                </div>
            </nav>
            <br>
            <a href="telaLg/cadastroproduto.php" class="btn text-light" style="background-color: red;">
                Novo Produto
            </a>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-condensed table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Preco</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="conteudo-produto"></tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="view/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="view/js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="view/js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8">
    async function carregarDados() {
        const request = await fetch(
            'controller/produtos/lerProdutos.php', {
                method: 'get'
            });
        const response = await request.json();
        const conteudoProduto = document.getElementById('conteudo-produto');
        for (const item of response.dados) {
            conteudoProduto.innerHTML += `
        <tr>
          <td>${item.id}</td>
          <td>${item.nome}</td>
          <td>${item.descricao}</td>
          <td>${item.preco}</td>
          <td>
            <div class="row">
              <button class="btn ml-2"
                      onclick="editarProduto(${item.id})">
                <i class="fas fa-pencil"></i>
              </button>
              <button class="btn btn-danger ml-2"
                      onclick="deletarProduto(${item.id})">
                <i class="fas fa-trash"></i>
              </button>
            </div>
          </td>
        </tr>`;
        }
    }

    function editarProduto(id) {
        window.location.href = `telaLg/editarProduto.php?id=${id}`;
    }

    function deletarProduto(id) {
        Swal.fire({
            title: 'Atenção!',
            text: 'Tem certeza que deseja remover essa tarefa?',
            icon: 'question',
            showConfirmButton: true,
            showCancelButton: true,
        }).then(async function(res) {
            if (res.isConfirmed) {
                const config = {
                    method: 'post',
                    body: JSON.stringify({
                        idProduto: id
                    })
                };
                const request = await fetch(
                    'controller/produtos/deletarProduto.php', config);
                const response = await request.json();
                if (response.status === 1) {
                    Swal.fire('Atenção!', 'Produto removido com sucesso', 'success').then(function() {
                        window.location.reload();
                    });
                } else {
                    Swal.fire('Atenção!', 'Erro ao remover Produto.', 'error');
                }
            }
        });
    }
    $(document).ready(function() {
        carregarDados();
    });
</script>

</html>