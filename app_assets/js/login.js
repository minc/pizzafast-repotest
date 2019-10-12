$(document).ready(function(){
	$("#btnLogin").click(function(){
		var usuario = $("#txtUsuario").val();
		var senha = $("#passSenha").val();
		$.ajax({
			type: "POST",
			url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/login.php",
			data: { usuario: usuario, senha: senha },
			success: function(resultado){
				var prefixo = resultado.split("|")[0];
				var result = resultado.split("|");
				if (prefixo == "senha") {
					Swal.fire({
						type: 'error',
						title: 'Erro!',
						text: 'Informações de acesso incorretas!'
					});
				} else if (prefixo == "status") {
					Swal.fire({
						type: 'error',
						title: 'Erro!',
						text: 'O usuário informado está inativo!'
					});
				} else if (prefixo == "falha") {
					Swal.fire({
						type: 'error',
						title: 'Erro!',
						text: 'Falha ao realizar o acesso!'
					});
				} else {
					console.log(prefixo);
				}
			}
		});
	});
});