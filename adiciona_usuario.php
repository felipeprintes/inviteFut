<?php include("cabecalho.php"); ?>
<?php include("conecta.php");?>
<?php include("banco_usuario.php");?>

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
//$confirm_senha = $_POST["confirm_senha"];-> vai servir apenas para validação de formulário

if(insereUsuario($conexao, $nome, $email, $senha)) { 
    header("Location: index.php")?>
      
<?php  } else { $msg=mysqli_error($conexao); ?> 
    <p class="text-danger">Usuário <?= $nome; ?> não foi adicionado:<?= $msg?> </p>
      
<?php } ?>

<?php include("rodape.php"); ?>