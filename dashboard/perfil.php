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
  <body class="sidebar-push  sticky-footer">
   	<!-- BEGIN TOPBAR -->
    <? cabecalho(); ?>
    <!-- END TOPBAR -->
    <!-- BEGIN SIDEBAR -->
    <!-- Sidebar Left -->
    <? barraEsq(""); ?>
    <!-- // Sidebar -->
    <!-- Sidebar Right -->
    <? barraDir(); ?>
    <!-- // Sidebar -->
    <!-- END SIDEBAR -->
  	<div class="container-fluid">
      <div id="main">
        <div class="page-header">
		      <h2>Perfil</h2>
		    </div>
		    <div role="tabpanel">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#account" aria-controls="account" role="tab" data-toggle="tab">Informações</a>
            </li>
            <li role="presentation">
              <a href="#ac_password" aria-controls="ac_password" role="tab" data-toggle="tab">Senha</a>
            </li>
          </ul>
          <!-- Tab panes -->
          <div class="tab-content tab-content-default">
            <div role="tabpanel" class="tab-pane active" id="account">             
              <form accept-charset="UTF-8" class="form-horizontal padding-15" name="account_form" id="account_form" role="form" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Nome</label>
                  <div class="col-sm-9">
                    <input type="text" name="first_name" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Sobrenome</label>
                  <div class="col-sm-9">
                    <input type="text" name="last_name" value="" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">E-mail</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" value="" class="form-control" value="">
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <div class="col-md-offset-3 col-sm-9 ">
                  	<button type="button" class="btn btn-primary"><i class="md md-person"></i>&nbsp;&nbsp;&nbsp;Salvar</button>
                  </div>
                </div>
              </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="ac_password">
              <form accept-charset="UTF-8" class="form-horizontal padding-15" name="pass_form" id="pass_form" role="form">
                <div class="form-group">
                  <label for="" class="col-sm-3 control-label">Senha</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" value="" class="form-control" value="">
                  </div>
                </div>
                <hr>
                <div class="form-group">
                  <div class="col-md-offset-3 col-sm-9 ">
                    <button type="button" class="btn btn-primary"><i class="md md-person"></i>&nbsp;&nbsp;&nbsp;Salvar</button>
                  </div>
                </div>
              </form> 
            </div>
          </div>
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