<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <title>AscentPc</title>
</head>

<body>
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
                      <a type="button" class="btn btn-text btn-up btn-sm d-flex align-items-center justify-content-center" href="telaLg/index.php" >
                        <i class="fas fa-user pd"></i>Login
                      </a>
                    </form>';
            }
            ?>
          </div>
      </div>
    </nav>
  </header>
  <main>
    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active c-item">
          <img src="https://i.pinimg.com/originals/e8/2a/4e/e82a4e7e592f266b3493587c65b558e5.jpg"
            class="d-block w-100 c-img" alt="Slide 2">
          <div class="carousel-caption top-0 mt-4">
            <p class="mt-5 fs-3 text-uppercase">Venha descobrir um pouco sobre nós</p>
            <h1 class="display-1 fw-bolder text-capitalize">Tour pela nossa história</h1>
            <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href="sobrenos.php">Clique aqui</a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="https://d1tm14lrsghf7q.cloudfront.net/media/files/rtf/2020_01_FRAME/razer_your_studio_2.jpg"
            class="d-block w-100 c-img" alt="Slide 3">
          <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5">Nosso produtos</p>
            <p class="display-1 fw-bolder text-capitalize">Pronto para compras</p>
            <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href="produtos.php">Clique aqui</a>
          </div>
        </div>
        <div class="carousel-item c-item">
          <img src="img/CarroLj.jpg" class="d-block w-100 c-img" alt="Slide 3">
          <div class="carousel-caption top-0 mt-4">
            <p class="text-uppercase fs-3 mt-5">conheça nossos Departamentos</p>
            <p class="display-1 fw-bolder text-capitalize">Venha nos conhecer </p>
            <a class="btn btn-primary px-4 py-2 fs-5 mt-5" href="produtos.php">Clique aqui</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <div class="container marketing">

      <div class="row">

        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle Obj" src="img/GifLoja.gif" alt="Nossa loja">
          <h2 class="fw-normal vd">SOBRE NÓS</h2>
          <p class="vd">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique nam facere atque voluptatem
            necessitatibus ratione explicabo temporibus vero dicta. Labore, quam voluptates tenetur quo fugiat alias
            quas pariatur dolor eveniet.</p>
          <p><a class="btn btn-secondary deta btn-text" href="sobrenos.php">Veja detalhes &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle ajd"
            src="https://gifs.eco.br/wp-content/uploads/2022/10/gifs-de-pc-gamer-17.gif" alt="Departamentos">
          <h2 class="fw-normal vd">DEPARTAMENTOS</h2>
          <p class="vd">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ut beatae minus ipsum
            deleniti rem
            tenetur fugiat sunt atque iusto natus quos quasi mollitia dolore, ab officiis ducimus nostrum hic kwe esd ud
            jsjdus jjdu assss ewwe q qw dsd w.</p>
          <p><a class="btn btn-secondary deta btn-text" href="produtos.php">Veja detalhes &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <img class="bd-placeholder-img rounded-circle Obj"
            src="https://i.pinimg.com/originals/b1/69/f0/b169f06545da9b2e92bfa8cffc9e7a95.gif" alt="Contatos">
          <h2 class="fw-normal vd">CONTATOS</h2>
          <p class="vd">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora facilis accusamus quis quae
            blanditiis
            iste dolores eos non fugiat deleniti provident cupiditate, quisquam delectus necessitatibus. Impedit debitis
            ratione tempora distinctio.</p>
          <p><a class="btn btn-secondary deta btn-text" href="#footer">Veja detalhes &raquo;</a></p>
        </div>
      </div>
      <div class="album py-5 vd">
        <h1 class="vd ">Nossos Produtos</h1>
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <a class="deco" href="vitrine.php?id=6">
                <div class="card shadow-sm rounded bd1">
                  <img src="https://shopinfo.vteximg.com.br/arquivos/ids/1394691-1000-1000/1.png?v=638181293355430000"
                    class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"
                    preserveAspectRatio="xMidYMid slice" focusable="false" alt="PC Gamer Intel G6400">
                  <div class="card-body">
                    <p class="card-text">PC Gamer Intel G6400 com placa de vídeo integrada SSD 240GB 500W 80 Plus</p>
                    <p class="card-text">R$ 2.500,00 á vista</p>
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

            <div class="col">
              <a class="deco" href="vitrine.php?id=5">
                <div class="card shadow-sm rounded bd1">
                  <img src="https://shopinfo.vteximg.com.br/arquivos/ids/1415392-1000-1000/1.png?v=638213363447100000"
                    class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"
                    preserveAspectRatio="xMidYMid slice" focusable="false" alt="Pc Gamer AMD Ryzen 5 5600G">
                  <div class="card-body">
                    <p class="card-text">
                      Pc Gamer AMD Ryzen 5 5600G 16GB (Radeon Vega 7 Integrado) SSD 240GB </p>
                    <p class="card-text">R$ 4.500,00 á vista</p>
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

            <div class="col">
              <a class="deco" href="vitrine.php?id=4">
                <div class="card shadow-sm rounded bd1">
                  <img src="https://shopinfo.vteximg.com.br/arquivos/ids/1415626-1000-1000/1.png?v=638213813998400000"
                    class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"
                    preserveAspectRatio="xMidYMid slice" focusable="false" alt="PC Gamer AMD Ryzen 5 4500">
                  <div class="card-body">
                    <p class="card-text">PC Gamer AMD Ryzen 5 4500 16GB (RTX 3050 8GB) SSD 240GB 500W 80 Plus</p>
                    <p class="card-text">R$ 3.400,00 á vista</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-text btn-up btn-sm comprar-btn">
                          <i class="fas fa-shopping-cart pd"></i>Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="deco" href="vitrine.php?id=2">
                <div class="card shadow-sm rounded bd1">
                  <img
                    src="https://resource.logitechg.com/w_692,c_limit,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/pro-x-superlight/pro-x-superlight-black-gallery-1.png?v=1"
                    width="100%" height="250px" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"
                    alt="Pro X Superlight">
                  <div class="card-body">
                    <p class="card-text">Mouse Gamer sem fio Pro X Superlight vm 910-006783 Logitech G</p>
                    <p class="card-text">R$ 899,00 á vista</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-text btn-up btn-sm comprar-btn">
                          <i class="fas fa-shopping-cart pd"></i>Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="deco" href="vitrine.php?id=1">
                <div class="card shadow-sm rounded bd1">
                  <img
                    src="https://static3.tcdn.com.br/img/img_prod/670412/fone_de_ouvido_headset_gamer_havit_h2016d_led_usb_p2_3_5mm_3733_1_8f1f9274d754df1926ecb97dd6021259.jpg"
                    class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"
                    preserveAspectRatio="xMidYMid slice" focusable="false" alt="Headset Gamer Havit">
                  <div class="card-body">
                    <p class="card-text">Headset Gamer Havit Gamenote H2016d RGB Preto</p>
                    <p class="card-text">R$ 240,00 á vista</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group">
                        <button type="button" class="btn btn-text btn-up btn-sm comprar-btn">
                          <i class="fas fa-shopping-cart pd"></i>Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a class="deco" href="vitrine.php?id=3">
                <div class="card shadow-sm rounded bd1">
                  <img src="https://cdn.shopify.com/s/files/1/0277/2507/0400/files/1_345x@2x.png?v=1683422343"
                    class="bd-placeholder-img card-img-top" width="100%" height="250" role="img"
                    preserveAspectRatio="xMidYMid slice" focusable="false" alt="Ninjutso NPC Control">
                  <div class="card-body">
                    <p class="card-text">Ninjutso NPC Control Mousepad Highend performance</p>
                    <p class="card-text">R$ 198,99 á vista</p>
                    <div class="d-flex justify-content-center align-items-center">
                      <div class="btn-group ">
                        <button type="button" class="btn btn-text btn-up btn-sm comprar-btn">
                          <i class="fas fa-shopping-cart pd"></i>Comprar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
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
  </main>
</body>

</html>