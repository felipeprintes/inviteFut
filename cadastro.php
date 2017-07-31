<?php include("cabecalho.php"); ?>


<h1>Formulário de cadastro</h1>	
<form action="usuarios.php" method="post">
	<table class="table">
		<tr>
			<td>Nome:</td>
			<td><input type="text" class="form-control" name="nome" placeholder="Insira seu nome"></td>
		</tr>

		<tr>
			<td>Email: </td>
			<td><input type="text" class="form-control" name="email" placeholder="Insira seu email"></td>
		</tr>

		<tr>
			<td>Senha: </td>
			<td><input type="password" class="form-control" name="senha" placeholder="Insira sua senha"></td>
		</tr>

		<tr>
			<td>Confirmar Senha: </td>
			<td><input type="password" class="form-control" name="confirm-senha" placeholder="Confirme sua senha"></td>
		</tr>

		<tr>
			<td>Sexo: </td>
			<td><input type="radio" name="sexo" class="form-control" value="homem">Masculino</td>
			<td><input type="radio" name="sexo" class="form-control" value="mulher">Feminino</td>
			<td><input type="radio" name="sexo" class="form-control" value="outros" checked>Outros</td>
		</tr>


	</table>

	<h3>Em breve, cadastro com o Facebook</h3>

</form>



<?php include("rodape.php"); ?>