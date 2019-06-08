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
          <h2>Pratos</h2>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <form accept-charset="UTF-8" class="form-horizontal padding-15" name="category_form" id="category_form" role="form" enctype="multipart/form-data">
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Opções de Refeições</label>
                <div class="col-sm-9">
                  <select id="basic" name="restaurant_type" class="selectpicker show-tick form-control">
                    <option value="">Selecione as Opções</option>
                    <option value="1">Pizzas</option>
                    <option value="2">Beirutes</option> 
                    <option value="3">Esfihas</option> 
                    <option value="4">Sobremesas</option> 
                    <option value="5">Lanches</option> 
                    <option value="6">Salgados</option> 
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Nome da Unidade</label>
                <div class="col-sm-9">
                  <input type="text" name="restaurant_name" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Site</label>
                <div class="col-sm-9">
                  <input type="text" name="restaurant_slug" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Endereço</label>
                <div class="col-sm-9">
                  <textarea name="restaurant_address" id="restaurant_address" cols="60" rows="3" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Descrição</label>
                <div class="col-sm-9">
                  <textarea name="restaurant_description" id="restaurant_description" cols="30" rows="8" class="summernote"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="avatar" class="col-sm-3 control-label">Logotipo</label>
                <div class="col-sm-9">
                  <div class="media">
                    <div class="media-left">
                      <img src="http://fooddelivery.viavilab.com/upload/restaurants/lotus-restaurant_1458544361-s.jpg" width="100" alt="person">
                    </div>
                    <div class="media-body media-middle">
                      <input type="file" name="restaurant_logo" class="filestyle"> 
                    </div>
                  </div>
                </div>
              </div>
              <h4>Horário Comercial</h4> 
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Domingo</label>
                <div class="col-sm-9">
                  <input type="text" name="open_sunday" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Segunda-Feira</label>
                <div class="col-sm-9">
                  <input type="text" name="open_monday" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Terça-Feira</label>
                <div class="col-sm-9">
                  <input type="text" name="open_tuesday" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Quarta-Feira</label>
                <div class="col-sm-9">
                  <input type="text" name="open_wednesday" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Quinta-Feira</label>
                <div class="col-sm-9">
                  <input type="text" name="open_thursday" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Sexta-Feira</label>
                <div class="col-sm-9">
                  <input type="text" name="open_friday" value="" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Sábado</label>
                <div class="col-sm-9">
                  <input type="text" name="open_saturday" value="" class="form-control">
                </div>
              </div>  
              <hr>
              <div class="form-group">
                <div class="col-md-offset-3 col-sm-9 ">
                  <button type="button" class="btn btn-primary"><i class="md md-edit"></i>&nbsp;&nbsp;&nbsp;Editar</button>
                </div>
              </div>
            </form> 
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