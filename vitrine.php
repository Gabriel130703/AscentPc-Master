<?php
session_start();
?>

<?php
// Fazer a conexão com o banco de dados (substitua as informações conforme o seu banco de dados)
$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "seu_banco";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
  die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$id = isset($_GET["id"]) ? $_GET["id"] : null; // Verifica se o parâmetro "id" está definido na URL
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AscentPc</title>
  <link rel="shortcut icon" href="img/LogoLoja.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <link rel="shortcut icon" href="imagens/car-card.png" type="image/x-icon">
  <script src="https://kit.fontawesome.com/587541520f.js" crossorigin="anonymous"></script>
</head>
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a href="index.php">
        <div class="rover"></div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const mainImg = document.getElementById("Mainimg");
    const zoomImg = document.querySelector(".zoom-img");

    zoomImg.addEventListener("click", function () {
      zoomImg.classList.toggle("zoomed");
    });
  });
  function changeMainImage(img) {
    var mainImg = document.getElementById("Mainimg");
    mainImg.src = img.src;
  }
</script>

<body>

</body>

</html>

<?php
if ($id !== null) {
  // Consulta para obter as informações do produto
  $sql = "SELECT nome, preco, imagem, imagem2, imagem3, imagem4, descricao FROM produtos WHERE id = $id";

  $result = $conn->query($sql);

  if ($result !== false && $result->num_rows > 0) {
    // Exibir as informações do produto
    $row = $result->fetch_assoc();

    echo '<section class="container">
        <div class="row mt-3">
          <div class="col-lg-5 col-md-12 col-12">
            <div class="zoom-img">
              <img class="img-fluid w-100" src="' . $row["imagem"] . '" id="Mainimg" alt="">
            </div>
            <div class="small-img-group">
              <div class="small-img-col">
                <img src="' . $row["imagem2"] . '" width="100%" class="small-img" alt="" onclick="changeMainImage(this)">
              </div>
              <div class="small-img-col">
                <img src="' . $row["imagem3"] . '" width="100%" class="small-img" alt="" onclick="changeMainImage(this)">
              </div>
              <div class="small-img-col">
                <img src="' . $row["imagem4"] . '" width="100%" class="small-img" alt="" onclick="changeMainImage(this)">
              </div>
              <div class="small-img-col">
                <img src="' . $row["imagem"] . '" width="100%" class="small-img" alt="" onclick="changeMainImage(this)">
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <h6 class="mt-">Home / Produto</h6>
            <h3 class="py-4">' . $row["nome"] . '</h3>
            <h2>R$ ' . $row["preco"] . '</h2>
            <button class="mt-3 btn-text comprar-btn">Comprar Agora</button>
            <h4 class="mt-5 mb-3">Sobre o Produto</h4>
            <span>' . $row["descricao"] . '</span>
          </div>
        </div>
      </section>';
  } else {
    echo "Nenhum produto encontrado.";
  }
} else {
  echo "ID do produto não especificado na URL.";
}

?>
<html>
<div class="blockcode">

  <footer class="shadow" id="footer">
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

</html>
<?php

// Fechar a conexão com o banco de dados
$conn->close();
?>