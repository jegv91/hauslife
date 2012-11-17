<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Solicitudes</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- <link href="../Css/style.css" rel="stylesheet" type="text/css" />-->
		<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript">	
			function FACconf(){
				//document.getElementById("demo").innerHTML="Tu Solicitud ha sido enviada";
				location.href = "../controllers/activaFAC.php";
			}
			
			function Comprobanteconf(){
				var aQuien = document.getElementById("para").value;
				if(aQuien != ""){
					document.getElementById("demo").innerHTML=aQuien;
					document.getElementById("para").value="";
				}else {
					document.getElementById("demo").innerHTML="ERROR";
				}
			}
		</script>

	</head>

	<body>
		<!-- <?php //include_once("../views/header_index.php");?> -->
		<br /><br />
		<!--Inicio-->
		<!--<div id="content"> -->
		<div class = "form-actions">
			<dl>
				<dt>
					<?php 
						//Verificar si la variable FAC esta activa o no, es decir si el alumno ya tiene su FAC
						$FAC = FALSE;
						if($FAC){
					?>
					Tu FAC ya ha sido solicitada, si aun no la tienes acude al modulo de atencion
					<?php
						} else {
					?>
					<!-- <input type="submit" class="btn btn-primary" value="Solicitar FAC" id="FAC" onclick="confirmFAC()"> -->
					<!-- Button to trigger modal -->
					<a href="#FACModal" role="button" class="btn btn-primary" data-toggle="modal">Solicitar FAC</a>
					<?php
						}
					?>
				</dt>
				<dd>
					Tu Codigo FAC te permite hacer llamas hacia afuera de residencias
				</dd> 
				<br/><br/>
				<dt>
					<!-- <input type="submit" class="btn btn-primary" value="Solicitar Comprobante de Domicilio" id="comprobante" onclick="datosComprobante()"> -->
					<!-- Button to trigger modal -->
					<a href="#ComprobanteModal" role="button" class="btn btn-primary" data-toggle="modal">Solicitar Comprobante de Domicilio</a>
				</dt>
				<dd>
					Pide tu comprobante de domicilio para cualquier tramite que necesites, como un plan para tu ceular
				</dd>
			</dl>
			
			<!-- Modal -->
			<div id="FACModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Confirmacion de FAC</h3>
				</div>
				<div class="modal-body">
					<p>Se enviar&aacute; un mail para hacer la solicitud de tu FAC</p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" onclick="FACconf()" data-dismiss="modal">Solicitar FAC</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
				</div>
			</div>
			
			<!-- Modal -->
			<div id="ComprobanteModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Solicitud de Comprobante de Domicilio</h3>
				</div>
				<div class="modal-body">
					<form class="form-horizontal" action="../controllers/solicitudes.php" method="POST">
						<p>Se enviara un mail para solicitar tu comprobante de domicilio</p>
						<br/>
						<p> Por favor llena la siguiente informacion</p>
						<br/>
						<p>Persona o Institucion a quien va dirigido:</p>
						<input name="para" id="para" type="text" placeholder="Para quien"/>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" onclick="Comprobanteconf()" data-dismiss="modal">Solicitar Comprobante</button>
					<button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
				</div>
			</div>
			<div id="Notice" class = "in">
				<a id="demo"></a>
				<a class="close" data-dismiss="alert" href="#Notice">&times;</a>
			<div/>
		</div>
		
		<br/><br/>
		
		<!-- <?php //include_once("../views/footer.html");?> -->
	</body>
</html>