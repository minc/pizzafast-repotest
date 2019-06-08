function cabecalho(){
	document.write('<div class="top-bar">'+
		'<div class="container">'+
		'<ul class="left-bar-side">'+
		'<li><p><i class="fa fa-envelope-o"></i><a href="mailto:contato@pizzafast.minc.net.br">contato@pizzafast.minc.net.br</a></p></li>'+
		'</ul>'+
		'<ul class="right-bar-side social_icons">'+
		'<li class="facebook"><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>'+
		'<li class="twitter"><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>'+
		'<li class="googleplus"><a href="" target="_blank"><i class="fa fa-google"></i></a></li>'+
		'<li class="instagram"><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>'+
		'<li class="pinterest"><a href="" target="_blank"><i class="fa fa-pinterest"></i></a></li>'+
		'<li class="vimeo"><a href="" target="_blank"><i class="fa fa-vimeo"></i></a></li>'+
		'<li class="youtube"><a href="" target="_blank"><i class="fa fa-youtube-play"></i></a></li>'+
		'</ul>'+
		'</div>'+
		'</div>'+
		'<header class="sticky">'+
		'<div class="container">'+
		'<div class="logo"><a href="home.html"><img src="http://fooddelivery.viavilab.com/upload/logo.png" alt="" ></a></div>'+
		'<nav class="animenu">'+
		'<button class="animenu_toggle"> '+
		'<span class="animenu_toggle_bar"></span>'+
		'<span class="animenu_toggle_bar"></span>'+
		'<span class="animenu_toggle_bar"></span>'+
		'</button>'+
		'<ul class="animenu_nav">'+
		'<li><a href="home.html"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;Home</a></li>'+
		'<li><a href="pizzarias.html"><i class="fa fa-star"></i>&nbsp;&nbsp;&nbsp;Pizzarias</a></li>'+
		'<li><a href="sobreNos.html"><i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp;Sobre Nós</a></li>'+
		'<li><a href="contato.html"><i class="fa fa-phone"></i>&nbsp;&nbsp;&nbsp;Contato</a></li>'+
		'</ul>'+
		'</nav>'+
		'</div>'+
		'</header>');
}

function barraLateral(){
	document.write('<div class="col-md-3 col-sm-5 col-xs-12 side-bar">' +
		'<br>' +
		'<div id="cart_box">' +
		'<h3>Pedido <i class="fa fa-shopping-cart pull-right"></i></h3>' +
		'<table class="table table_summary">' +
		'<tbody>' +
		'<tr>' +
		'<td><a href="" class="remove_item"><i class="fa fa-minus-circle"></i></a><strong>1x</strong>Belgian Waffle</td>' +
		'<td><strong class="pull-right">R$30,00</strong></td>' +
		'</tr>' +
		'<tr>' +
		'<td><a href="" class="remove_item"><i class="fa fa-minus-circle"></i></a><strong>3x</strong>Waffle</td>' +
		'<td><strong class="pull-right">R$70,00</strong></td>' +
		'</tr>' +
		'</tbody>' +
		'</table>' +
		'<hr>' +
		'<table class="table table_summary">' +
		'<tbody>' +
		'<tr>' +
		'<td class="total">TOTAL <span class="pull-right">R$100,00</span></td>' +
		'</tr>' +
		'</tbody>' +
		'</table>' +
		'<hr>' +
		'<a class="btn_full" href="">Finalizar&nbsp;&nbsp;&nbsp;<i class="fa fa-money"></i></a>' +
		'</div>' +
		'<div id="cart_box" class="categories">' +
		'<h3>Opções</h3>' +
		'<ul>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Todas</a></label>' +
		'</li>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pizzas</a></label>' +
		'</li>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beirutes</a></label>' +
		'</li>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Esfihas</a></label>' +
		'</li>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sobremesas</a></label>' +
		'</li>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lanches</a></label>' +
		'</li>' +
		'<li>' +
		'<label><a href=""><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Salgados</a></label>' +
		'</li>' +
		'</ul>' +
		'</div>' +
		'<div id="help" class="box_style_2"> ' +
		'<i class="fa fa-life-bouy"></i>' +
		'<h4>Suporte Técnico:</h4>' +
		'<a href="tel://+55 11 9 5989 4425" class="phone">(11) 9 5989-4425</a><small>Todos os dias | 24H</small> ' +
		'</div>' +
		'</div>')
}

function rodape(){
	document.write('<footer>' +
		'<div class="container">' +
		'<ul class="row">' +
		'<li class="col-sm-4">' +
		'<h5>Sobre Nós</h5>' +
		'<hr>' +
		'<p>O Pizza Fast é a solução perfeita para você pedir refeições quando quiser, de onde estiver. Ficou com vontade daquela pizza no seu sabor favorito? Faça um pedido! Contamos com a maior lista de pizzarias online em sua região.</p>' +
		'<ul class="social_icons">' +
		'<li class="facebook"><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>' +
		'<li class="twitter"><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>' +
		'<li class="googleplus"><a href="" target="_blank"><i class="fa fa-google"></i></a></li>' +
		'<li class="instagram"><a href="" target="_blank"><i class="fa fa-instagram"></i></a></li>' +
		'<li class="vimeo"><a href="" target="_blank"><i class="fa fa-vimeo"></i></a></li>' +
		'<li class="youtube"><a href="" target="_blank"><i class="fa fa-youtube-play"></i></a></li>' +
		'</ul>' +
		'</li>' +
		'<li class="col-sm-4">' +
		'<h5>Tweets Recentes</h5>' +
		'<hr>' +
		'<a class="twitter-timeline" href="https://twitter.com/viaviwebtech" data-widget-id="711791987028918272">Tweets by @</a>' +
		'<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?"http":"https";if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>' +
		'</li>' +
		'<li class="col-sm-4">' +
		'<h5>Informações de Contato</h5>' +
		'<hr>' +
		'<div class="loc-info">' +
		'<p><i class="fa fa-phone"></i>(11) 2366-0411</p>' +
		'<p><i class="fa fa-mobile"></i>(11) 9 5989-4425</p>' +
		'<p><i class="fa fa-envelope-o"></i><a href="mailto:contato@pizzafast.minc.net.br">contato@pizzafast.minc.net.br</a></p>' +
		'</div>' +
		'</li>' +
		'</ul>' +
		'</div>' +
		'</footer>' +
		'<div class="rights">' +
		'<div class="container">' +
		'<p class="font-montserrat"><a href="home.html">Pizza Fast</a> © Copyright 2019 - <script>anoAtual();</script>. Todos os direitos reservados.<br>CNPJ: 22.002.306/0001-10</p>' +
		'<p class="font-montserrat">Desenvolvido Por: <a href="http://minc.net.br/" target="_blank">M.INC</a></p>' +
		'</div>' +
		'</div>');
}

function anoAtual(){
	var now = new Date;
	document.write(now.getFullYear());
}