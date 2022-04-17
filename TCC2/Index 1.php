<?php
//conexão
require_once('conexao.php');

session_start();

//Botão enviar
if (isset($_POST['btn-entrar'])) {
	$erros = array();
	$login = mysqli_real_escape_string($conexao, $_POST['login']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

	if (empty($login) or empty($senha)) {
		$erros[] = "<script> alert('O campo login/senha precisa ser preenchido');</script>";
	} else {
		$sql = "SELECT login FROM usuario WHERE login = '$login'";
		$resultado = mysqli_query($conexao, $sql);

		if (mysqli_num_rows($resultado) > 0) {
			$senha = md5($senha);
			$sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($conexao, $sql);
			

			if (mysqli_num_rows($resultado) == 1) {
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($conexao);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				$_SESSION['usuarioNiveisAcessoId'] = $dados['niveldeacesso'];


				if($dados['niveldeacesso'] == 1){
					header("Location: index 4.php");
				}else if($dados['niveldeacesso'] == 2){
					header('Location: index 3.php');
				}

			} else {
				$erros[] = "<script> alert('Usuárioe senha não conferem'); </script>";
			}
		} else {
			$erros[] = "<script> alert('Usuário inexistente'); </script>";
		}
	}
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Titulo</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel='stylesheet' type='text/css' media='screen' href='assets/css/Index 1.css'>

</head>

<body class="text-center">


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>




	<main class="form-signin">
		<!--Cabeçalho-->
		<div class="px-3 py-2 text-white" id="idcabecalho">
			<div class="container">
				<div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
					<img class="mb-4" src="assets/images/IF1.png " alt="" width="70" height="70" id="ifimag">
					<a href="#" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" id="cabecalho1">
						PAINEL DE HORAS
					</a>

					<ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">

						<a href="#" class="nav-link text-secondary" id="cabecalho2">
							INICIO
						</a>


						<li>
							<a href="Index 1.php" class="nav-link text-white" id="cabecalho2">
								LOGIN
							</a>
						</li>
						<li>
							<a href="Index 2.php" class="nav-link text-white" id="cabecalho2">
								CADASTRAR
							</a>
						</li>

					</ul>
				</div>
			</div>
		</div>


		<?php
		if (!empty($erros)) {
			foreach ($erros as $erro) {
				echo $erro;
			}
		}

		?>
		<!-- CORPO-->
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div id="S0">
				<!--<img class="mb-4" src="assets/images/IF1.png" alt="" width="80" height="80">-->
				<h1 class="h3 mb-3 fw-normal">Login</h1>
			</div>
			<div class="form-floating" id="S1">

				<input type="text" class="form-control" id="floatingInput" placeholder="CPF" name="login">
				<label for="floatingInput">
					<font style="vertical-align: inherit;">
						<font style="vertical-align: inherit;">CPF</font>
					</font>
				</label>

			</div>
			<div class="form-floating" id="S2">
				<input type="password" class="form-control" id="" placeholder="Senha" name="senha">
				<label for="floatingPassword">
					<font style="vertical-align: inherit;">
						<font style="vertical-align: inherit;">Senha</font>
					</font>
				</label>
			</div>

			<div class="checkbox mb-3" id="mostSenha">
				<label>
					<input type="checkbox" value="remember-me">
					<font style="vertical-align: inherit;">
						<font style="vertical-align: inherit;"> Lembre de mim
						</font>
					</font>
				</label>
			</div>
			<button class="btn-primary" type="submit" class="b1" value="enviar" name="btn-entrar">
				<font style="vertical-align: inherit;">
					<font style="vertical-align: inherit;">Acessar</font>
				</font>
			</button>
		</form>
		<p class="mt-5 mb-3 text-muted">
			<font style="vertical-align: inherit;">
				<font style="vertical-align: inherit;">© 2017–2021</font>
			</font>
		</p>
	</main>



</body>

</html>