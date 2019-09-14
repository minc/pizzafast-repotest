$(document).ready(function(){
	$("#btnCadastrar").click(function(){
		var nome = $("#txtNome").val();
		var usuario = $("#txtUsuario").val();
		var senha = $("#passSenha").val();
		var confirmaSenha = $("#passConfirmaSenha").val();
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
		if (nome == "" || nome == null || nome == undefined || usuario == "" || usuario == null || usuario == undefined || senha == "" || senha == null || senha == undefined || confirmaSenha == "" || confirmaSenha == null || confirmaSenha == undefined || cep == "" || cep == null || cep == undefined || uf == "" || uf == null || uf == undefined || logradouro == "" || logradouro == null || logradouro == undefined || numero == "" || numero == null || numero == undefined || bairro == "" || bairro == null || bairro == undefined || cidade == "" || cidade == null || cidade == undefined || ddd == "" || ddd == null || ddd == undefined || celular == "" || celular == null || celular == undefined || email == "" || email == null || email == undefined) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Preencha todos os campos obrigatórios!'
			});
			return;
		} else if (confirmaSenha != senha) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Resultado negativo na confirmação de senha!'
			});
		} else if (senha.length < 8) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira uma senha com 8 dígitos ou mais!'
			});
		} else {
			$.ajax({
				type: "POST",
				url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/cadastro.php",
				data: { nome : nome, usuario : usuario, senha : senha, cep : cep, uf : uf, logradouro : logradouro, numero : numero, complemento : complemento, bairro : bairro, cidade : cidade, ddd : ddd, celular : celular, email : email },
				success: function(resultado){
					if (resultado == 1) {
						Swal.fire({
							type: 'success',
						  	title: 'Sucesso!',
						  	text: 'Cadastro realizado com sucesso!',
						  	footer: '<a href="index.html">Fazer login?</a>'
						});
					} else if (resultado == 2) {
						Swal.fire({
							type: 'error',
							title: 'Erro!',
							text: 'Usuário cadastrado anteriormente!',
							footer: '<a href="index.html">Fazer login?</a>'
						});
					} else {
						Swal.fire({
							type: 'error',
							title: 'Erro!',
							text: 'Falha ao realizar o cadastro!'
						});
					}
				}
			});
		}
	});
});