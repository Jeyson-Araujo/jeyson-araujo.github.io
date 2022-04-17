<?php
//Conexão
require_once("conexao.php");

//Sessão
session_start();

//Verificação
if (!isset($_SESSION['logado'])) {
  //header('location: index 1.php'); 
}

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado2 = mysqli_query($conexao, $sql);
$dado = mysqli_fetch_array($resultado2);
mysqli_close($conexao);
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Titulo</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Index3.css'>
  <!--Inportando o CSS-->
  <script src='main.js'></script>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

</head>

<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



  <!--Cabeçalho-->
  <div class="px-3 py-2 text-white" id="idcabecalho">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <img class="mb-4" src="assets/images/IF1.png " alt="" width="70" height="70" id="ifimag">
        <a href="index 1.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" id="cabecalho1">
          PAINEL DE HORAS
        </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <!--<li>
                <a href="#" class="nav-link text-secondary" id="cabecalho2">
                  Home
                </a>
              </li>-->
          <li>
            <a href="#" class="nav-link text-white" id="cabecalho2">
              INICIO
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white" id="cabecalho2">
              PEDIDOS
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white" id="cabecalho2">
              PRODUTOS
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white" id="cabecalho2" data-toggle="modal" data-target="#modalExemplo">
              USUÁRIO
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Usuário</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div>
            <a>Nome: <?php echo $dado['nomeCompleto']; ?></a> </br>
            <a>Curso: <?php echo $dado['curso']; ?></a> </br>
            <a>E-mail: <?php echo $dado['email']; ?></a> </br>
          </div>

          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>






  <!--Banner-->
  <div class="p-4 p-md-5 mb-4 text-black  " id="idbanner">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Bem-vindo(a) <?php echo $dado['nomeCompleto']; ?></h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-black fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row gx-4 gx-lg-5" id="cards">
    <div class="col-md-4 mb-5" id="card1">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Card One</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
      </div>
    </div>
    <div class="col-md-4 mb-5" id="card2">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Card Two</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
      </div>
    </div>
    <div class="col-md-4 mb-5" id="card3">
      <div class="card h-100">
        <div class="card-body">
          <h2 class="card-title">Card Three</h2>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
        </div>
        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">More Info</a></div>
      </div>
    </div>
  </div>





</body>

</html>