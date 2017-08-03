<?php

require_once("conecta.php");

function listaUsuario($conexao) {
    $usuarios = array();
    $resultado = mysqli_query($conexao, "select * from usuario");
    while ($jogador = mysqli_fetch_assoc($resultado)) {
        array_push($games, $jogador);
    }

    return $games;
}

function insereUsuario($conexao, $nome, $email, $senha) {
    $query = "insert into usuario (nome, email, senha) values('{$nome}', '{$email}', '{$senha}')";
    return mysqli_query($conexao, $query);
}

function buscaUsuario($conexao, $email, $senha) {

    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conexao, $email);
    $query = "select * from usuario where email='{$email}' and senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);

    return $usuario;
}

function buscaTodosOsEmails($conexao) {
    $usuarios = array();
    $resultado = mysqli_query($conexao, "select email from usuario");
    while ($email = mysqli_fetch_assoc($resultado)) {
        array_push($usuarios, $email);
    }

    return $usuarios;
}
