<?php 
if(!isset($_SESSION)){
	session_start();
}
if(isset($_SESSION) && isset($_SESSION['user_id'])) {
	$matricula = $_SESSION['user_id'];
	$tipo = $_SESSION['user_type'];
	if($tipo == 1 ){
		require_once '../models/residente.php';
		//Objeto residente
		$res=new Residente();
		//Buscar al residente con la matricula
		$usuariologueado = $res->buscarPorMatricula($matricula);
	} else {
		$usuariologueado = array("nombre"=>"Administrador");
	}
}else{
	$tipo = -1;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hauslife | <?php echo $pageTitle;?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Le styles -->
<link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<?php if(isset($evento)){?>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet"
	type="text/css" />
<link href="../bootstrap/css/datepicker.css" rel="stylesheet"
	type="text/css" />
<link href="../bootstrap/css/timepicker.css" rel="stylesheet"
	type="text/css" />
<link class="jsbin"
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css"
	rel="stylesheet" type="text/css" />
<script class="jsbin"
	src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin"
	src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript"
	src="../JavaScripts/bootstrap-datepicker.js"></script>
<script type="text/javascript"
	src="../bootstrap/js/bootstrap-timepicker.js"></script>
<script type="text/javascript"
	src="../bootstrap/js/jquery.bootstrap-money-field.js"></script>

<?php } else if(isset($solicitudes)){?>
<script type="text/javascript">	
			function FACconf(){
				//document.getElementById("demo").innerHTML="Tu Solicitud ha sido enviada";
				location.href = "../controllers/activaFAC.php";
			}
			
			function Comprobanteconf(){
				var aQuien = document.getElementById("para").value;
				if(aQuien != ""){
					document.forms["Comprobante"].submit();
					document.getElementById("para").value="";
				}else {
					alert("No has puesto el destinatario del Comprobante");
				}
				
			}
		</script>
<?php }?>
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}
</style>

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<!-- Fav and touch icons -->
<link rel="shortcut icon" href="../bootstrap/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144"
	href="../bootstrap/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114"
	href="../bootstrap/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72"
	href="../bootstrap/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed"
	href="../bootstrap/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a>
				<?php 	if($tipo == 1 ){?>
				<a class="brand" href="../views/indexRes.php">Hauslife</a>
				<?php } else if($tipo == 0 ){?>
				<a class="brand" href="../views/indexAdmin.php">Hauslife</a>
				<?php } else {?>
				<a class="brand" href="../views/index.php">Hauslife</a>
				<?php }?>
				<div class="nav-collapse collapse">
					<p class="navbar-text pull-right">
						<?php if($tipo == 0 ){?>
						<a href="#" class="navbar-link"><?php echo $usuariologueado['nombre'];?>
						</a>
						<?php } elseif($tipo == 1 ) {?>
						<a href="../views/verInformacion.php?id=<?php echo $usuariologueado['_id'];?>"
							class="navbar-link"><?php echo $usuariologueado['nombre'];?> </a>
						<?php }
						if($tipo != -1 ){?>
						<a href="../controllers/cerrarSesion.php"><i
							class="icon-off icon-white"></i> </a>
							<?php }?>
					</p>
					<?php if($tipo != -1 ){?>
					<ul class="nav">
						<?php if($tipo==0){?>
						<li class="dropdown"><a id="drop1" href="#" role="button"
							class="dropdown-toggle" data-toggle="dropdown">Residentes<b
								class="caret"></b>
						</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li><a href="../views/listaResidentes.php">Lista de residentes</a>
								</li>
								<li><a href="../views/registraResidente.php">Registrar residente</a>
								</li>
							</ul>
						</li>
						<li class="dropdown"><a id="drop1" href="#" role="button"
							class="dropdown-toggle" data-toggle="dropdown">Eventos<b
								class="caret"></b>
						</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li><a href="../views/listaEventos.php">Lista de eventos</a></li>
								<li><a href="../views/registraEvento.php">Registrar evento</a></li>
							</ul>
						</li>
						<li class="dropdown"><a id="drop1" href="#" role="button"
							class="dropdown-toggle" data-toggle="dropdown">Noticias<b
								class="caret"></b>
						</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
								<li><a href="../views/listaNoticias.php">Lista de noticias</a></li>
								<li><a href="../views/registraNoticia.php">Registrar noticia</a>
								</li>
							</ul>
						</li>
						<?php } else {?>
						<li><a href="../views/listaEventos.php">Eventos</a></li>
						<li><a href="../views/listaNoticias.php">Noticias</a></li>
						<li><a href="../controllers/solicitudes.php">Solicitudes</a></li>
						<?php }?>
					</ul>
					<?php }?>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>