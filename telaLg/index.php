<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>AscentPc</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="shortcut icon" href="../img/LogoLoja.png" type="image/x-icon" />
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
</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-02.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="fa fa-user" style="color: #000000;"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="loginTxt" placeholder="Email" id="loginTxt">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="senhaTxt" placeholder="Senha" id="senhaTxt">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Lembrar senha
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" id="loginBtn">
							Logar
						</button>
					</div>

					<div class="text-center p-t-90">
						<a class="txt1" href="registro.php">
							REGISTRE-SE
						</a>
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
	<script type="text/javascript" charset="utf-8">
		$(document).ready(function () {
			$('#loginBtn').on('click', async function (e) {
				e.preventDefault();

				const config = {
					method: "post",
					headers: {
						'Accept': 'application/json',
						'Content-Type': 'application/json'
					},
					body: JSON.stringify({
						login: $('#loginTxt').val(),
						senha: $('#senhaTxt').val()
					})
				};

				const request = await fetch('../controller/login/logar.php', config);
				const response = await request.json();
				if (response.status === 1) {
					window.location.href = '../index.php';
				} else {
					Swal.fire({
						title: 'Atenção!',
						text: 'Login ou senha incorretos',
						icon: 'error'
					});
				}
			});
		});
	</script>


</body>

</html>