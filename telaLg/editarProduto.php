<?php

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>ByBikes - Bicicletas/aluguel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="imagem/png" href="../produtos/_img/logo.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="apple-touch-icon" sizes="57x57" href="../imagens/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../imagens/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../imagens/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../imagens/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../imagens/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../imagens/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../imagens/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../imagens/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../imagens/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../imagens/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../imagens/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../imagens/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../imagens/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
                <form class="login100-form validate-form">
                    <input type="hidden" id="idProdutoTxt" value="<?php echo $id ?>" />
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-bike"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        REGISTRAR
                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="nomeTxt" placeholder="Nome" id="nomeTxt">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <textarea class="form-control input100" type="text" name="descricaoTxt" placeholder="descricao" id="descricaoTxt"></textarea>
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" name="precoTxt" placeholder="preco" id="precoTxt">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>
                    <div class="container-login100-form-btn">
                        <a href="../index.php"><button class="login100-form-btn" id="cancelarBtn" type="button" style="margin-right: 50px;">
                                cancelar
                            </button></a>
                        <button class="login100-form-btn" id="confirmarBtn" type="button">
                            Registrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>


    <script src="script.js" type="text/javascript" charset="utf-8"></script>

</body>
<script src="../view/js/jquery-3.6.0.min.js" type="text/javascript"></script>
<script src="../view/js/sweetalert2.all.min.js" type="text/javascript"></script>
<script src="../view/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
    async function carregarDados(id) {
        const config = {
            method: "post",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                idProduto: id
            })
        };

        const request = await fetch('../controller/produtos/listarProdutosPeloID.php', config);
        const response = await request.json();

        const {
            dados
        } = response;
        $('#nomeTxt').val(dados[0].nome);
        $('#descricaoTxt').val(dados[0].descricao);
        $('#precoTxt').val(dados[0].preco);
    }

    async function editarDados(e) {
        const nomeTxt = $('#nomeTxt').val();
        const descricaoTxt = $('#descricaoTxt').val();
        const precoTxt = $('#precoTxt').val();
        const idProdutoTxt = $('#idProdutoTxt').val();

        const config = {
            method: "post",
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                nome: nomeTxt,
                descricao: descricaoTxt,
                preco: precoTxt,
                idProduto: idProdutoTxt
            })
        };

        const request = await fetch(
            '../controller/produtos/atualizarProduto.php',
            config);
        const response = await request.json();
        if (response.status === 1) {
            Swal.fire('Atenção!', 'dados cadastrados com sucesso', 'success')
                .then(res => window.location.href = '../listarprodutos.php');
        } else {
            Swal.fire('Atenção!', 'Verifique as informações no form', 'error');
        }
    }
    $(document).ready(async function() {

        await carregarDados(<?php echo $id; ?>);
        $('#confirmarBtn').on('click', async function(e) {
            await editarDados(e);
        });

        $('#cancelarBtn').on('click', function() {
            window.location.href = '../listarprodutos.php';
        });

    });
</script>

</html>