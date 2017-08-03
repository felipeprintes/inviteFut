<?php
require_once 'cabecalho.php';
require_once 'logica_usuario.php';

mostraAlerta("success");
mostraAlerta("danger");
verificaUsuario();
?>
<h1>Logado como <?= usuarioLogado() ?></h1>