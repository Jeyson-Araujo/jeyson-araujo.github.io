<?php
  session_start();
  //Solicitou uma conexao com o banco de dados
  include("conexao.php");

  if((isset($_POST['cpf'])) && (isset($_POST['senha']))){
    $usuario = mysqli_real_escape_string($conn, $_POST['cpf']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

    //Buscar na tabela usuário o usuário que corresponde com os dados digitado no formulário
    $result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $resultado = mysqli_fetch_assoc($resultado_usuario);

    //Encontrado um usuário na tabela usuário com os mesmos dados digitado no formulário
    if(isset($resultado)){
      $_SESSION['usuarioId'] = $resultado['id'];
      $_SESSION['usuarioNome'] = $resultado['nome'];
      $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
      $_SESSION['usuarioEmail'] = $resultado['email'];
      //Direciona o usuário para a página correta ex: Administração
      if($_SESSION['niveldeacesso'] == "1"){
        header("Location: index4.php");
      }elseif($_SESSION['niveldeacesso'] == "2"){
        header("Location: index3.php");
      }
        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
      }else{    
        //Variável global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "Usuário ou senha Inválido";
        header("Location: index 1.php");
    }
  }
?>