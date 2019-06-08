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
					<h2>Pizzarias</h2>
				</div>
		       	<div class="panel panel-default">
            		<div class="panel-body">
                		<form accept-charset="UTF-8" class="form-horizontal padding-15" name="category_form" id="category_form" role="form" enctype="multipart/form-data">
							<div class="form-group">
                    			<label for="" class="col-sm-3 control-label">Nome da Unidade</label>
                      			<div class="col-sm-9">
                        			<input type="text" name="category_name" value="" class="form-control">
                    			</div>
                			</div> 
                			<hr>
                			<div class="form-group">
                    			<div class="col-md-offset-3 col-sm-9 ">
                    				<button type="button" class="btn btn-primary"><i class="md md-add"></i>&nbsp;&nbsp;&nbsp;Adicionar</button>
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