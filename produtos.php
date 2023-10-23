<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!--===============================================================================================-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!--===============================================================================================-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!--===============================================================================================-->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <!--===============================================================================================-->
  <link rel="stylesheet" href="styles.css">
  <!--===============================================================================================-->
  <link rel="shortcut icon" href="img/LogoLoja.png" type="image/x-icon" />
  <!--===============================================================================================-->
  <!-- Inclua a biblioteca jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Inclua o arquivo SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.all.min.js"></script>
  <!-- Inclua o arquivo Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>AscentPc</title>
</head>



<body>
  <div class="container-fluid">
    <header data-bs-theme="dark">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a href="index.php">
            <div class="rover"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link vd" href="sobrenos.php">Sobre Nós</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link vd" href="#footer">Contato</a>
                </li>
                <li class="nav-item">
                <a class="nav-link vd" href="produtos.php">Produtos
                </li>  
              </ul>
              <?php


              if (isset($_SESSION['logado']) && $_SESSION['logado']) {
                if ($_SESSION['usuario'] == 'admin@gmail.com') {
                  echo '<form class="d-flex" role="search">
                          <a type="button" class="btn btn-text btn-up btn-sm d-flex align-items-center justify-content-center" href="listarProdutos.php">
                            <i class="fas fa-edit pd"></i>Editar-Produtos
                          </a>
                        </form>';
                  echo '<form class="d-flex justify-content-end" role="search">
                        <a type="button" class="btn btn-text btn-up btn-sm d-flex align-items-center justify-content-center" href="telaLg/logout.php">
                          <i class="fas fa-sign-out-alt pd"></i> Logout
                        </a>
                      </form>';
                } else {
                  echo '<form class="d-flex justify-content-end float-end" role="search">
        <div class="btn-group">
          <a type="button" class="btn btn-text btn-up btn-sm d-flex align-items-center justify-content-center">
            <i class="fas fa-user pd"></i>' . $_SESSION['nome_completo'] . '
          </a>
          <a type="button" class="btn btn-text btn-up btn-sm d-flex align-items-center justify-content-center" href="telaLg/logout.php">
            <i class="fas fa-sign-out-alt pd"></i> Logout
          </a>
        </div>
      </form>';
                }
              } else {
                echo '<form class="d-flex" role="search">
                      <a type="button" class="btn btn-text btn-up btn-sm d-flex align-items-center justify-content-center" href="telaLg/index.php">
                        <i class="fas fa-user pd"></i>Login
                      </a>
                    </form>';
              }
              ?>
            </div>
        </div>
      </nav>
    </header>
    <main role="main">
      <div id="conteudo-produto"></div>
    </main>
    <div class="blockcode">

      <footer class="shadow" id = "footer">
        <div class="d-flex justify-content-between mt-3 align-items-center mx-auto py-4 flex-wrap" style="width: 80%">
          <a href="#" class="d-flex align-items-center p-0 text-dark">
            <img alt="logo" src="img/LogoNav.gif" width="75px" />
            <span class="ms-4 h5 font-weight-bold">AscentPc</span>
          </a>
          <small>&copy; AscentPc, 2023. Todos os direitos reservados.</small>
          <div>
            <button class="btn btn-dark btn-flat p-2">
              <i class="fab fa-facebook"></i>
            </button>
            <button class="btn btn-dark btn-flat p-2">
              <i class="fab fa-twitter"></i>
            </button>
            <button class="btn btn-dark btn-flat p-2">
              <i class="fab fa-instagram"></i>
            </button>

      </footer>
    </div>
  </div>
  </div>
</body>
</html>
<script src="view/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="view/js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="view/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/d3d6f2df1f.js" crossorigin="anonymous"></script>

<script type="text/javascript" charset="utf-8">
  function conteudo(id, nome, imagem, preco) {
    return `
    <div class="col">
  <a class="deco" href="vitrine.php?id=${id}">
    <div class="card shadow-sm rounded bd1">
      <img class="bd-placeholder-img card-img-top" width="100%" height="280" role="img"
        preserveAspectRatio="xMidYMid slice" focusable="false" src="${imagem}" alt="Card image cap">
      <div class="card-body">
        <p class="card-text">${nome}<br><br></p>
        <p class="card-text">R$ ${preco} á vista</p>
        <div class="d-flex justify-content-center align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-text btn-up btn-sm comprar-btn">
              <i class="fas fa-shopping-cart pd"></i> Comprar</button>
          </div>
        </div>
      </div>
    </div>
  </a>
</div>
`;
  }

  async function carregarDados() {
    const request = await fetch(
      'controller/produtos/listarProdutos.php', {
      method: 'get'
    });
    const response = await request.json();
    const conteudoProduto = document.getElementById('conteudo-produto');
    console.log(response.dados);


    const montarLinha = (abertura, conteudo, fechamento) => {
      conteudoProduto.innerHTML += `${abertura}${conteudo}${fechamento}`;
    };
    console.log(response.dados);
    let aux = 0;
    let conteudoTemp = '';
    let aberturaTemp = '<div class="row">';
    let fechamentoTemp = '</div>';
    const total = response.dados.length;
    let count = 0;

    for await (const item of response.dados) {

      conteudoTemp += conteudo(item.id, item.nome, item.imagem, item.preco);

      if (aux === 2) {
        montarLinha(aberturaTemp, conteudoTemp, fechamentoTemp);
        conteudoTemp = '';
        aux = 0;
      } else if (count === total - 1) {
        montarLinha(aberturaTemp, conteudoTemp, fechamentoTemp);
        conteudoTemp = '';
        aux = 0;
      } else {
        aux++;
      }
      count++;
    }
  }
  $(document).ready(function () {
    carregarDados()
  });
</script>