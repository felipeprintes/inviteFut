<?php include("cabecalho.php");
include("conecta.php");
include("banco-usuario.php"); ?>

<?php 
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$confirma_senha = $_POST["confirm-senha"];

