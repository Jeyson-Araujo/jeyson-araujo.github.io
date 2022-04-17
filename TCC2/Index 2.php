<?php

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Titulo</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href='assets/css/Index2.css'>

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
          <a href="Index 1.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none" id="cabecalho1">
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


    <!--Cadatro-->
    <div class="container" id="cad">
      <main>
        <div class="col-md-7 col-lg-8">
          <br></br>
          <h4 class="mb-3" _msthash="968656" _msttexthash="515554">Cadastre-se</h4>
          <form action="registro.php" method="POST">
            <div class="row g-3">

              <div class="col-12">
                <label for="Name" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Nome completo (Obrigatório)</font>
                  </font>
                </label>
                <div class="input-group has-validation">

                  <input type="text" class="form-control" id="username" placeholder="Nome completo" required="" name="nomeCompleto">
                  <div class="invalid-feedback">
                    Seu nome de usuário é obrigatório.
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label for="email" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Email </font>
                  </font><span class="text-muted">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">(Obrigatório)</font>
                    </font>
                  </span>
                </label>
                <input type="email" class="form-control" id="email" placeholder="Email@(estudante)ifms.edu.br" name="email">
                <div class="invalid-feedback">
                  Por favor, insira um endereço de e-mail válido para atualizações de envio.
                </div>
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Campus</font>
                  </font>
                </label>
                <select class="form-select" id="country" required="" name="campus">
                  <option value="">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Escolher...</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Campus Coxim</font>
                    </font>
                  </option>

                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Campus Campo Grande</font>
                    </font>
                  </option>

                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Campus Três Lagoas</font>
                    </font>
                  </option>
                </select>
                <!--
                <div class="invalid-feedback">
                  Por favor adicione um campus.
                </div>-->
              </div>

              <div class="col-md-4">
                <label for="state" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cursos</font>
                  </font>
                </label>
                <select class="form-select" id="state" required="" name="curso">
                  <option value="">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Escolher...</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Técnico em Informática</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Técnico em Alimentos</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Técnico em Aquicultura</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Técnico em Desenvolvimento de Sistemas</font>
                    </font>
                  </option>
                </select>
                <!--
                <div class="invalid-feedback">
                  Por favor adicione um curso.
                </div>-->
              </div>

              <div class="col-md-3">
                <label for="zip" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Turma</font>
                  </font>
                </label>
                <select class="form-select" id="country" required="" name="turma">
                  <option value="">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Escolher...</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">1029-AB</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">1089-A</font>
                    </font>
                  </option>
                </select>
              </div>

              <div class="col-md-5">
                <label for="country" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Período</font>
                  </font>
                </label>
                <select class="form-select" id="country" required="" name="periodo">
                  <option value="">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Escolher...</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">1° Período</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">2° Período</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">3° Período</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">4° Período</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">5° Período</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">6° Período</font>
                    </font>
                  </option>
                  <option>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">7° Período</font>
                    </font>
                  </option>
                </select>
                
              </div>

              <div class="col-12">
                <label for="address" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">CPF (Obrigatório)</font>
                  </font>
                </label>
                <input type="text" class="form-control" id="address" placeholder="CPF (somente números)" required="" name="cpf">
                <div class="invalid-feedback">
                  Por favor adicione um CPF válido.
                </div>
              </div>

              <div class="col-12">
                <label for="address2" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Matrícula (Obrigatório)</font>
                  </font></span>
                </label>
                <input type="text" class="form-control" id="address2" placeholder="Matrícula" name="matricula">
              </div>

              <div class="col-12">
                <label for="address" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Senha (Obrigatório)</font>
                  </font>
                </label>
                <input type="password" class="form-control" id="address" placeholder="Senha" required="" name="senha">
                <div class="invalid-feedback">
                  Por favor adicione uma senha.
                </div>
              </div>
              <div class="col-12">
                <label for="address" class="form-label">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Confirme a Senha (Obrigatório)</font>
                  </font>
                </label>
                <input type="password" class="form-control" id="address" placeholder="Conf. Senha" required="" name="confSenha">
                <div class="invalid-feedback">
                Por favor confirme sua senha.
                </div>
              </div>

            </div>

            <hr class="my-4">
            <h4 class="mb-3" id="h4">Nível de acesso</h4>

            <div class="form-check" id="func">
              <input name="acesso" type="radio" class="form-check-input" checked="" required="" value="1">
              <label class="form-check-label">Servidor</label>
            </div>

            <div class="form-check" id="func">
              <input name="acesso" type="radio" class="form-check-input" checked="" required="" value="2">
              <label class="form-check-label" >Estudante</label>
            </div>

            <hr class="my-4">

            <button class="w-100 btn btn-primary btn-lg" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Registrar</font></font></button>
          </form>
        </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1" _msthash="532272" _msttexthash="406705">© Nome da empresa 2017-2021</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#" _msthash="766129" _msttexthash="174057">Privacidade</a></li>
      <li class="list-inline-item"><a href="#" _msthash="766259" _msttexthash="79469">Termos</a></li>
      <li class="list-inline-item"><a href="#" _msthash="766389" _msttexthash="60073">Apoio</a></li>
    </ul>
  </footer>
  </div>



</body>

</html>