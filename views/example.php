<!DOCTYPE html>
<html lang="en">
<head>
<title>Buscar solicitud|Empleado</title>
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../Css/style.css" rel="stylesheet" type="text/css" />	
<script type="text/javascript" src="../bootstrap/js/bootstrap.js" />
<script type="text/javascript" src="../JavaScripts/jquery-1.7.2.js" />
<script type="text/javascript">	

</script>
</head>

<body>
<?php //include_once("../views/header_index.php");?>
<center>
<br /><br />
<!--Inicio-->
<!--<div id="content"> -->
<div class="well well-large" style="width:60%; min-width:660px;">
<div class="instrucciones">
<form name="busqueda" id="busqueda" action="../Controllers/SolicitudesEmpleado.php" method="post" class="navbar-form">
<div class="navbar" style="display:table-cell;vertical-align:middle;" >
<ul class="nav" >
<li>	
<input class="search-query" name="matricula" style="width:100px;margin-right:15px;" id="matricula" type="text" placeholder="Matricula">
</li>
<li>
<input class="search-query" name="patron" id="patron" type="text" placeholder="Nombre"/>
</li>
<li>
<select id="convocatoria" data-convert="no" name="convocatoria" style="width:100px;margin-right:15px;">
<?php
// Formato de las convocatorias: anio:semestre;anio:semestre
if ($fechas != null) {
foreach ($fechas as $index => $value) {
echo "<option value=\"".$value[0].":".$value[1]."\">"; 
if ($value[1] == 1) {
echo "Ene-May ";
} else {
echo "Ago-Dic ";
}
echo $value[0]."</option>\n";
}
// Todas las convocatorias
echo "<option value=\"";
foreach ($fechas as $index => $value) {
if ($index != 0) {
echo ";".$value[0].":".$value[1];
} else {
echo $value[0].":".$value[1];
}
}
echo "\">Ultimas dos</option>\n";
} else {
echo "<option>No hay convocatorias</option>";
}
?>
</select>
</li>
<li>
<input type="submit" class="btn" value="Buscar" id="search">
</li>
</ul>
</div>
</form>
<br />
<?php
// Estructura de los resultados:
// Nombre, APaterno, AMaterno, Matricula, Anio, Semestre, ID_Solicitud
if (isset($resultados)) {
echo "<table id=\"solicitudesEmp\" style=\"width: 650px;\">";
if ($resultados == null) {
?>
<tr class="th">
<td><center><h3>No hay resultados</h3></center></td>
<tr>
<?php
} else {
?>	
<tr class='th'>
<td><center><h3>Matricula</h3></center></td>
<td><center><h3>Nombre</h3></center></td>
<td><center><h3>Fecha</h3></center></td>
<td></td>
</tr> 

<?php	
foreach ($resultados as $index => $row) {
?>
<tr>
<td><center><?php echo $row[3];?></center></td>
<td><center><?php echo $row[0];?>&nbsp;<?php echo $row[1];?>&nbsp;<?php echo $row[2];?> </center></td>
<td>
<center>
<?php
if ($row[5] == 1) {
echo "Ene-May ";
} else {
echo "Ago-Dic ";
}
echo $row[4];
?>
</center>
</td>
<td><center><a href='../Controllers/ControllerEstudianteAvance.php?matricula=<?php echo $row[3]?>'><input class='btn primary' type='button' style="margin-left: 20px;"value='Detalle'/></a></center></td>
</tr>

<?php 
}
}
echo "</table>";
}
?>
</div>
</center>
</div>
<br/><br/>
<?php //include_once("../views/footer.html");?>
</body>
</html>