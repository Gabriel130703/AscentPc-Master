<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <section class="about">
          <img  class="rounded-circle Obj" src="img/GifLoja.gif" alt="Louja">
          <h2>Sobre Nós </h2>
          <p>
            Bem-vindo ao nosso site AscentPc, onde estamos apaixonados por tecnologia e dedicados a fornecer as melhores soluções para as suas necessidades de informática. Aqui está um pouco sobre quem somos e o que nos impulsiona:
          </p>
          <h2>Nossa História</h2>
          <p>
            Desde a nossa fundação em 2008, temos nos esforçado para ser uma referência no mundo dos computadores. Começamos como uma pequena empresa com uma visão: tornar a tecnologia acessível e descomplicada para todos. 
            Ao longo dos anos, expandimos nossos serviços e produtos, conquistando a confiança de uma base de clientes fiéis.
          </p>
          <h2>Nossos Produtos e Serviços</h2>
          <p>
            Oferecemos uma ampla gama de produtos e serviços para atender às suas necessidades específicas:
            <ul>
                <li>Computadores pessoais e laptops de última geração, adaptados para diferentes usos, desde jogos até trabalho profissional.</li>
                <li>Componentes de hardware de alta qualidade para atualização e personalização de seu computador existente.</li>
                <li>Acessórios, periféricos e dispositivos complementares para melhorar sua experiência de uso.</li>
            </ul>
          </p>
          <h2>Entre em Contato</h2>
          <p>
            Estamos aqui para ajudar e responder a todas as suas perguntas. Se você precisar de assistência, conselhos ou informações adicionais, não hesite em entrar em contato conosco. 
            Nossos especialistas estão prontos para fornecer suporte personalizado e orientação especializada.
          </p>
          <p>Obrigado por visitar nosso site de computadores. Esperamos poder ajudá-lo a encontrar as melhores soluções para suas necessidades tecnológicas!</p>

        </section>
      </main>
    
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
</body>
</html>