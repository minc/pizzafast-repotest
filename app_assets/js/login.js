$(document).ready(function(){
	$("#btnLogin").click(function(){
		var usuario = $("#txtUsuario").val();
		var senha = $("#passSenha").val();
		$.ajax({
			type: "POST",
			url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/login.php",
			data: { usuario: usuario, senha: senha },
			success: function(resultado1, resultado2, resultado3, resultado4, resultado5, resultado6, resultado7, resultado8, resultado9){
				console.log(resultado1);
			}
		});
	});
});