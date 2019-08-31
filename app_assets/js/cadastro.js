$(document).ready(function(){
	$("#btnCadastrar").click(function(){
		var nome = $("#txtNome").val();
		var usuario = $("#txtUsuario").val();
		var senha = $("#passSenha").val();
		var cep = $("#txtCEP").val();
		var uf = $("#txtUF").val();
		var logradouro = $("#txtLogradouro").val();
		var numero = $("#txtNumero").val();
		var complemento = $("#txtComplemento").val();
		var bairro = $("#txtBairro").val();
		var cidade = $("#txtCidade").val();
		var ddd = $("#txtDDD").val();
		var celular = $("#txtCelular").val();
		var email = $("#txtEmail").val();
		Swal.fire({
			type: 'error',
		  	title: 'Oops...',
		  	text: 'Something went wrong!',
		  	footer: '<a href>Why do I have this issue?</a>'
		});
		/*$.ajax({
			type: "POST",
			url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/cadastro.php",
			data: { nome : nome, usuario : usuario, senha : senha, cep : cep, uf : uf, logradouro : logradouro, numero : numero, complemento : complemento, bairro : bairro, cidade : cidade, ddd : ddd, celular : celular, email : email },
			success: function(resultado){
				if (resultado == 1) {
					Swal.fire({
						type: 'error',
					  	title: 'Oops...',
					  	text: 'Something went wrong!',
					  	footer: '<a href>Why do I have this issue?</a>'
					});
				} else {

				}
			}
		});*/
	});
});