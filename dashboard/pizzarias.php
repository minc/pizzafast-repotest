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
  		<? barraEsq("pizzarias"); ?>
  		<!-- // Sidebar -->
		<!-- Sidebar Right -->
		<? barraDir(); ?>
		<!-- // Sidebar -->
	    <!-- END SIDEBAR -->
  		<div class="container-fluid">
  			<div id="main">
				<div class="page-header">
					<div class="pull-right">
						<a href="addPizzaria.php" class="btn btn-primary">Add&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
					</div>
					<h2>Pizzarias</h2>
				</div>
				<div class="panel panel-default panel-shadow">
    				<div class="panel-body">
         			    <table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            				<thead>
            					<tr>
					                <th>Unidade</th>
					                <th class="text-center width-100">Ações</th>
					            </tr>
            				</thead>
				            <tbody>
	                	        <tr>
					                <td>DAIRY FREE FLAVORS</td>                
					                <td class="text-center">
					                	<div class="btn-group">
					                    	<a href="editarPizzaria.php" class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
					                      	<a href="" class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
					                    </div>
						            </td>
	                            </tr>
	                		    <tr>
					            	<td>Food And Beverages</td>                
					                <td class="text-center">
					                	<div class="btn-group">
					                    	<a href="editarPizzaria.php" class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
					                      	<a href="" class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
					                    </div>
					            	</td>
	                	        </tr>
	                       		<tr>
					                <td>TEAS &amp; SODAS</td>                
					                <td class="text-center">
					                	<div class="btn-group">
					                    	<a href="editarPizzaria.php" class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
					                      	<a href="" class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
					                    </div>
					            	</td>
                	            </tr>
                            </tbody>
        				</table>
        			</div>
    				<div class="clearfix"></div>
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