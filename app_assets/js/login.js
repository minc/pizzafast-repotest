$(document).ready(function(){
	$("#btnLogin").click(function(){
		var usuario = $("#txtUsuario").val();
		var senha = $("#passSenha").val();
		$.ajax({
			type: "POST",
			url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/login.php",
			data: { usuario: usuario, senha: senha },
			success: function(resultado1){
				console.log(resultado1);
			}
		});
	});
});