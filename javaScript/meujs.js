function validacao(){
	var val = document.formulario;

	if(val.nome.value==""){
		alert("Por favor, preencha o campo nome");
		val.nome.focus();
		return false;
	}

	if(val.email.value=="" || val.email.value.indexOf("@")==-1 || val.email.value.indexOf(".")==-1){
		alert("Seu email está inválido, preencha corretamente!");
		val.email.focus();
		return false;
	}

	if(val.senha.value=="" || val.senha.value.length<6){
		alert("Sua senha deve possuir mais de 6 caracteres")
		val.senha.focus();
		return false;
	}

	if(val.confirm_senha.value != val.senha.value){
		alert("As senhas não bateram");
		val.confirm_senha.focus();
		return false;
	}
}