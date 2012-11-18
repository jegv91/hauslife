<?php 
$pageTitle="Registrar residente";
$evento=true;
include_once("../views/header_index.php");
?>
	<br />
	<br />
	<div class="container">
		<h1>Registrar Evento</h1>
		<form class="form-horizontal" action="../controllers/registrarEvento.php" method="POST">
			<div style="display:table-cell;">
			<div class="control-group">
				<label class="control-label" for="titulo">T&iacute;tulo</label>
				<div class="controls">
					<input type="text" id="titulo" name="titulo" placeholder="T&iacute;tulo del evento">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="presupuesto">Presupuesto</label>
				<div class="controls">
					<input type="text" class="money" name="delivery_charge" />
				</div>
			</div>
			<div class="control-group">
				<div style="display:table-cell;">
					<label class="control-label" for="inicioVentas">Fecha de inicio</label>
					<div class="controls">
						<input name="fechaRevision" type="text" class="span2"
							value="2012-11-17"
							id="dp2"> <span class="help-inline"></span>
					</div>
				</div>
				<div style="display:table-cell;">
					<input class="timepicker-2" id="dp1" type="text" style="width: 75px;" />
					<i class="icon-time" style="margin: -2px 0 0 -22.5px; pointer-events: none; position: relative;"></i>
				</div>
				
			</div>
			<div class="control-group" >
				<div style="display:table-cell;">
					<label class="control-label" for="inicioVentas">Fecha de t&eacute;rmino</label>
					<div class="controls">
						<input name="fechaRevision" type="text" class="span2"
							value="2012-11-17"
							id="dp3"> <span class="help-inline"></span>
					</div>
				</div>
				<div style="display:table-cell;">
					<input class="timepicker-2" id="dp2" type="text" style="width: 75px;" />
					<i class="icon-time" style="margin: -2px 0 0 -22.5px; pointer-events: none; position: relative;"></i>
				</div>
			</div>
			</div>
			<div style="display:table-cell;">
				<input type='file' onchange="readURL(this);" /> <br/>
				<img style="padding-left: 55px;" id="blah" src="#" alt="your image" />
			</div>
			
			<div class="control-group">
				<label class="control-label" for="descripcion">Descripci&oacute;n</label>
				<div class="controls">
					<textarea id="descripcion" name="descripcion" rows="6" cols="120" class="span7"
					placeholder="Descripci&oacute;n de la noticia"></textarea>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<button type="submit" class="btn btn-primary"><i class="icon-comment icon-white"></i> Crear Evento</button>
				</div>
			</div>			
		</form>
	</div>
	<br />
	<br />
	<?php //include_once("../views/footer.html");?>
	
	
	<script type="text/javascript">    
	var options = {
		width: 80 // The css width to be applied to the textfield
	};
	$('.money').money_field(options); // Or just $('.money').money_field();
	</script>
	
	<script type="text/javascript">
        $(document).ready(function () { 
            $('.timepicker-2').timepicker({
                minuteStep: 30,
                showInputs: false,
                disableFocus: true
            });
        });
    </script>
	
	<script type="text/javascript">
		/*
		 * LLamadas a seleccionador de fechas de bootstrap
		 */
		var currentTime = new Date();
		var month = currentTime.getMonth() + 1;
		var day = currentTime.getDate();
		var year = currentTime.getFullYear();
		
		function setToday(id){
			document.getElementById(id).value=year+"-"+month+"-"+day;
		}
		$(document).ready(function () {


		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp2').datepicker({
				format: 'yyyy-mm-dd'
			});
		});
		$(function(){
			window.prettyPrint && prettyPrint();
			$('#dp3').datepicker({
				format: 'yyyy-mm-dd'
			});
		});
		});
	</script>
	<script type="text/javascript">
		 function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#blah')
							.attr('src', e.target.result)
							.width(240)
							.height(154);
					};

					reader.readAsDataURL(input.files[0]);
				}
			}

	</script>
</body>
</html>
