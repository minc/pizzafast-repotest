function validaEmail(email) {
	var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  	return regex.test(email);
}

$(document).ready(function(){
	$("#btnEnviar").click(function(){
		var usuario = $("#txtUsuario").val();
		var email = $("#txtEmail").val();
		if (usuario == "" || usuario == null || usuario == undefined || email == "" || email == null || email == undefined) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Preencha todos os campos obrigatórios!'
			});
		} else if (!validaEmail(email)) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira um e-mail válido!'
			});
		} else {
			$.ajax({
				type: "POST",
				url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/enviaSenha.php",
				data: { email : email },
				success: function(resultado){
					console.log(resultado);
				}
			});
		}
	});
});