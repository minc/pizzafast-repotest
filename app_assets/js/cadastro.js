function Onlychars(e) {
	var tecla = new Number();
	if (window.event) {
		tecla = e.keyCode;
	} else if (e.which) {
		tecla = e.which;
	} else {
		return true;
	}
	if ((tecla >= "48") && (tecla <= "57")) {
		return false;
	}
}

function validaEmail(email) {
	var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  	return regex.test(email);
}

function limpa_formulário_cep() {
	$("#txtUF").val("");
	$("#txtLogradouro").val("");
	$("#txtBairro").val("");
	$("#txtCidade").val("");
}

$(document).ready(function(){
	$("#txtCEP").mask('99999-999');
	$("#txtCelular").mask('9 9999-9999');
	$("#txtCEP").blur(function(){
		var cep = $(this).val().replace(/\D/g, '');
		if (cep != "" && cep != null && cep != undefined) {
			var validaCep = /^[0-9]{8}$/;
			if (validaCep.test(cep)) {
				$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
					if (!("erro" in dados)) {
						$("#txtUF").val(dados.uf);
						$("#txtLogradouro").val(dados.logradouro);
						$("#txtBairro").val(dados.bairro);
						$("#txtCidade").val(dados.localidade);
					} else {
						limpa_formulário_cep();
						Swal.fire({
							type: 'error',
							title: 'Erro!',
							text: 'CEP não encontrado na base!'
						});
					}
				});
			} else {
				limpa_formulário_cep();
				Swal.fire({
					type: 'error',
					title: 'Erro!',
					text: 'Formato de CEP inválido!'
				});
			}
		} else {
			limpa_formulário_cep();
		}
	});
	$("#btnCadastrar").click(function(){
		var nome = $("#txtNome").val();
		var usuario = $("#txtUsuario").val();
		var senha = $("#passSenha").val();
		var confirmaSenha = $("#passConfirmaSenha").val();
		var cepFormatado = $("#txtCEP").val();
		var cepSeparado = cepFormatado.split("-");
		var cep = cepSeparado[0] + cepSeparado[1];
		var uf = $("#txtUF").val();
		var logradouro = $("#txtLogradouro").val();
		var numero = $("#txtNumero").val();
		var complemento = $("#txtComplemento").val();
		var bairro = $("#txtBairro").val();
		var cidade = $("#txtCidade").val();
		var ddd = $("#selDDD").val();
		var celularFormatado = $("#txtCelular").val();
		var celular = celularFormatado.split(" ")[0] + celularFormatado.split("-")[0].substr(2, 4) + celularFormatado.split("-")[1];
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
		} else if (usuario.length < 5) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira um usuário com 5 dígitos ou mais!'
			});
		} else if (nome.length < 5) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira um nome com 5 dígitos ou mais!'
			});
		} else if (cep.length < 8) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira um CEP válido!'
			});
		} else if (ddd.length < 2) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira um DDD válido!'
			});
		} else if (celular < 9) {
			Swal.fire({
				type: 'error',
				title: 'Erro!',
				text: 'Insira um número de celular válido!'
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
				url: "http://pizzafast.minc.net.br/pizzafast-repotest/controller/cadastro.php",
				data: { nome : nome, usuario : usuario, senha : senha, cep : cep, uf : uf, logradouro : logradouro, numero : numero, complemento : complemento, bairro : bairro, cidade : cidade, ddd : ddd, celular : celular, email : email },
				success: function(resultado){
					if (resultado == 1) {
						let timerInterval;
						Swal.fire({
							title: 'Cadastro realizado com sucesso!',
						  	html: 'Você será direcionado ao login em <strong></strong> milisegundos.',
						  	timer: 3000,
						  	onBeforeOpen: () => {
						    	Swal.showLoading()
						    	timerInterval = setInterval(() => {
						      		Swal.getContent().querySelector('strong')
						        	.textContent = Swal.getTimerLeft()
						    	}, 100)
						  	},
						  	onClose: () => {
						    	clearInterval(timerInterval)
						  	}
						}).then((result) => {
						  	if (
						    	/* Read more about handling dismissals below */
						    	result.dismiss === Swal.DismissReason.timer
						  	) {
						    	location.href = "index.html";
						  	}
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