<?php 
function listaUsuario($conexao){
	$usuarios = array();
	$resultado = mysqli_query($conexao, "select * from usuario");
	while($jogador = mysqli_fetch_assoc($resultado)){
		array_push($games, $jogador);
	}

	return $games;
}

function insereUsuario($conexao, $nome, $email, $senha){
	$query = "insert into usuario (nome, email, senha) values('{$nome}', '{$email}', '{$senha}')";
	return mysqli_query($conexao, $query);

}