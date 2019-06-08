<?php

function cabecalho(){
	echo '	<nav class="navbar navbar-default navbar-fixed-top">
			  	<div class="container-fluid">
			    	<!-- Brand and toggle get grouped for better mobile display -->
			    	<div class="navbar-header">
			      		<button type="button" class="navbar-toggle visible-xs visible-sm collapsed pull-left" id="showLeftPush">
			        		<i class="md md-menu"></i>
			      		</button>
			      		<a class="navbar-brand" href="home.php">Pizza Fast</a>
			      		<button type="button" class="navbar-toggle pull-right" id="showRightPush">
			        		<i class="md md-more-vert"></i>
			      		</button>
			    	</div>
			    	<div class="hidden-xs">
			      		<ul class="nav navbar-nav navbar-right">
			         		<li>
			          			<div class="btn-group navbar-btn">
			            			<a href="http://pizzafast.minc.net.br/" class="btn btn-success" target="_blank"><i class="md md-cloud-download"></i>&nbsp;&nbsp;&nbsp;Download</a>
			          			</div>
			         		</li> 
			        		<li>
			          			<a href="#" class="user" id="showUserPush">
			            			<img src="dash_assets/img/male-icon.png" alt="person" class="img-circle" width="40"/>
			           			</a>
			        		</li>
			       		</ul>
			    	</div>
			  	</div>
			</nav>';
}

function barraEsq($pagina){
	echo '	<div class="sidebar left-side" id="sidebar-left">
				<!-- Wrapper Reqired by Nicescroll (start scroll from here) -->
			  	<div class="nicescroll">
			    	<div class="wrapper" style="margin-bottom:0px">
			      		<ul class="nav nav-sidebar" id="sidebar-menu">
			         		<li ' . ($pagina == "home" ? "class='active'" : "") . '><a href="home.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			        		<li ' . ($pagina == "pizzarias" ? "class='active'" : "") . '><a href="pizzarias.php"><i class="fa md-local-pizza"></i>Pizzarias</a></li>
			         		<li ' . ($pagina == "pratos" ? "class='active'" : "") . '><a href="pratos.php"><i class="fa fa-cutlery"></i>Pratos</a></li>
			         		<li ' . ($pagina == "pedidos" ? "class='active'" : "") . '><a href="pedidos.php"><i class="fa fa-cart-plus"></i>Pedidos</a></li>
			         		<li ' . ($pagina == "comentarios" ? "class='active'" : "") . '><a href="comentarios.php"><i class="md-rate-review"></i>Comentários</a></li>
			      		</ul>
			      		<ul class="social_list">
			        		<h4 class="social-headline">Suporte Técnico:</h4>
			        		<div class="social_logo">
			          			<a href="http://pizzafast.minc.net.br/" target="_blank">
			            			<img src="http://fooddelivery.viavilab.com/upload/sidebar_logo.png" alt="logo" />
			          			</a>
			        		</div>
			        		<p>E-mail: <a href="mailto:contato@pizzafast.minc.net.br">contato@pizzafast.minc.net.br</a></p>
					        <p>Website: <a href="http://pizzafast.minc.net.br/" target="_blank">http://pizzafast.minc.net.br/</a></p>
					        <p>WhatsApp:<br><a href="tel://+55 11 9 5989 4425">(11) 9 5989-4425</a></p>
			      		</ul>
			    	</div>
			  	</div>
			</div>';
}

function barraDir(){
	echo '	<div class="sidebar right-side" id="sidebar-right">
		      	<!-- Wrapper Reqired by Nicescroll -->
		      	<div class="nicescroll">
					<div class="wrapper">
		          		<div class="block-primary">
						    <div class="media">
		              			<div class="media-left media-middle">
								    <a>
		    							<img src="dash_assets/img/male-icon.png" alt="person" class="img-circle border-white" width="60"/>
									</a>
		              			</div>
		              			<div class="media-body media-middle">
								    <h4>Victorvvd dsqd</h4>
		              			</div>
						    </div>
		          		</div>
		          		<ul class="nav nav-sidebar" id="sidebar-menu">
						    <li><a href="perfil.php"><i class="md md-person-outline"></i>Perfil</a></li>
		      				<li><a href=""><i class="md md-exit-to-app"></i>Sair</a></li>
		    			</ul>
				    </div>
		      	</div>
		    </div>';
}

function rodape(){
	echo '	<div class="footer">
				<p>
          			&nbsp;&nbsp;&nbsp;2019 - ' . date("Y") . ' © Desenvolvido Por: <a href="http://minc.net.br/" target="_blank">M.INC</a>
        		</p>
			</div>';
}

?>