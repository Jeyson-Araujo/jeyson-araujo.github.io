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

    </head>
    <body>

    </body>
</html>