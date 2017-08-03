<?php

session_start();
//include("cabecalho.php");
include("conecta.php");
include("banco_usuario.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$senhaCriptografada = md5($senha);
//$confirm_senha = $_POST["confirm_senha"];-> vai servir apenas para validação de formulário
$usuarios = buscaTodosOsEmails($conexao);
foreach ($usuarios as $usuario) {
    if ($email == $usuario["email"]) {
        $_SESSION["danger"] = "E-mail já cadastrado.";
        header("Location: index.php");
        die();
    }
}
if (insereUsuario($conexao, $nome, $email, $senhaCriptografada)) {
    $_SESSION["success"] = "Usuario cadastrado com sucesso";
    header("Location: index.php");
    die();
} else {
    $msg = mysqli_error($conexao);
    $_SESSION["danger"] = "Usuario não cadastrado: $msg";
    header("Location: index.php");
    die();
}
