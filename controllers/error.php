<?php 
$error=$_GET["error"];
$pageTitle="Error";
include_once("../views/header_index.php");
?>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span6 offset3">
			<h1>Se produjo un error :(</h1>
			<p><?php echo $error;?></p>
			<a class='btn btn-primary' onclick="history.back()" ><i class='icon-arrow-left icon-white'></i> Regresar</a>		
			</div>
			</div>
			</div>
			<?php include_once("../views/footer.html");?>
</body>
</html>