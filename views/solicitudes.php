<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Solicitudes</title>
		<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<!-- <link href="../Css/style.css" rel="stylesheet" type="text/css" />-->
		<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js"></script>
		<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript">	
			function confirmFAC()
			{
				var x;
				var r=confirm("Se enviara un mail para hacer la solicitud de tu FAC");
				if (r==true)
					{
						x="Tu Solicitud ha sido enviada";
					}
				else
					{
						x="Has cancelado el envio de la solicitud";
					}
				document.getElementById("demo").innerHTML=x;
				$(".alert").alert("soy un alert");
			}
			
			function datosComprobante(){
				var x;
				var name=prompt("Indica a quien ira dirigido el comprobante:","");
				if (name!=null && name != "")
				{
					x="Tu comprobante para " + name + " ha sido solicitado";
				} else {
					x="";
				}
				document.getElementById("demo").innerHTML=x;
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
					<input type="submit" class="btn btn-primary" value="Solicitar FAC" id="FAC" onclick="confirmFAC()">
					<?php
						}
					?>
				</dt>
				<dd>
					Tu Codigo FAC te permite hacer llamas hacia afuera de residencias
				</dd> 
				<br/><br/>
				<dt>
					<input type="submit" class="btn btn-primary" value="Solicitar Comprobante de Domicilio" id="comprobante" onclick="datosComprobante()">
				</dt>
				<dd>
					Pide tu comprobante de domicilio para cualquier tramite que necesites, como un plan para tu ceular
				</dd>
			</dl>
			<br/><br/>
			<p id="demo"></p>
			
			<!-- Button to trigger modal -->
			<a href="#myModal" role="button" class="btn btn-primary" data-toggle="modal">Launch demo modal</a>

			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h3 id="myModalLabel">Modal header</h3>
				</div>
				<div class="modal-body">
					<p>One fine body…</p>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
		<br/><br/>
		
		<!-- <?php //include_once("../views/footer.html");?> -->
	</body>
</html>