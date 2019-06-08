<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pizza Fast | Delivery Fácil, Rápido e Seguro</title>
  	<link href="http://fooddelivery.viavilab.com/upload/favicon.png" rel="shortcut icon" type="image/x-icon" />
  	<link rel="stylesheet" href="dash_assets/css/style.css">
  	<script src="dash_assets/js/jquery.js"></script>

    <? require("controller/funcoes.php"); ?>

  	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  	<!--[if lt IE 9]>
  	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  	<![endif]-->

  </head>
  <body class="sidebar-push sticky-footer">
    <!-- BEGIN TOPBAR -->
    <? cabecalho(); ?>
    <!-- END TOPBAR -->
	  <!-- BEGIN SIDEBAR -->
	  <!-- Sidebar Left -->
    <? barraEsq("home"); ?>
    <!-- // Sidebar -->
    <!-- Sidebar Right -->
    <? barraDir(); ?>
    <!-- // Sidebar -->
	  <!-- END SIDEBAR -->
  	<div class="container-fluid">
      <div id="main">
        <div class="page-header">
		      <h2>Visão Geral</h2>
        </div>
        <div class="row">
         	<a href="pizzarias.php">
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-orange panel-shadow">
                <div class="media">
                  <div class="media-left">
                    <div class="panel-body">
                      <div class="width-100">
                        <h5 class="margin-none" id="graphWeek-y">Pizzarias</h5>
                        <h2 class="margin-none" id="graphWeek-a">3</h2>
                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="pull-right width-150">
                      <i class="fa md-local-pizza md-4x" style="margin: 8px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="pratos.php">
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-green panel-shadow">
                <div class="media">
                  <div class="media-left">
                    <div class="panel-body">
                      <div class="width-100">
                        <h5 class="margin-none" id="graphWeek-y">Pratos</h5>
                        <h2 class="margin-none" id="graphWeek-a">4</h2>
                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="pull-right width-150">
                      <i class="fa fa-cutlery fa-4x" style="margin: 8px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </a>
          <a href="pedidos.php">
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-grey panel-shadow">
                <div class="media">
                  <div class="media-left">
                    <div class="panel-body">
                      <div class="width-100">
                        <h5 class="margin-none" id="graphWeek-y">Pedidos</h5>
                        <h2 class="margin-none" id="graphWeek-a">239</h2>
                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="pull-right width-150">
                      <i class="fa fa-cart-plus fa-4x" style="margin: 8px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </a>
          <a href="comentarios.php">
            <div class="col-sm-6 col-md-3">
              <div class="panel panel-primary panel-shadow">
                <div class="media">
                  <div class="media-left">
                    <div class="panel-body">
                      <div class="width-100">
                        <h5 class="margin-none" id="graphWeek-y">Comentários</h5>
                        <h2 class="margin-none" id="graphWeek-a">15</h2>
                      </div>
                    </div>
                  </div>
                  <div class="media-body">
                    <div class="pull-right width-150">
                      <i class="fa md-rate-review md-4x" style="margin: 8px;"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          </a>
        </div>
      </div>
	 		<? rodape(); ?>
  	</div>
    <div class="overlay-disabled"></div>
    
    <!-- Plugins -->
    <script src="dash_assets/js/plugins.min.js"></script>
  
    <!-- Loaded only in index.html for demographic vector map-->
    <script src="dash_assets/js/jvectormap.js"></script>
  
    <!-- App Scripts -->
    <script src="dash_assets/js/scripts.js"></script>

  </body>
</html>