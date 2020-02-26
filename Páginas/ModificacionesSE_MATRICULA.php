<html>
	<head>
	<title>SE_MATRICULA</title>
	<link type="text/css" rel="stylesheet" href="Styles.css">
	</head>
<body>
<div class="contenido">
<div id="navigation">
<ul>
<li><a href="index.html" class="active">Inicio</a></li>
<li><a href="consultas.html">Consultas</a></li>
<li><a href="inserciones.html">Inserciones</a></li>
<li><a href="modificaciones.html">Modificaciones</a></li>
<li><a href="borrados.html">Borrados</a></li>
</ul>
</div>
<div id="top-image"></div>
<div id="cuerpo">
<h1>Modificaciones</h1><h1 style="font-size:40px">"SE_MATRICULA"</h1>
<?php 
if (!(isset($_GET['varCursoID'])) &&  !(isset($_GET['varAlumnoID']))){
?>
<form class="linea1">
<p>Introduce el identificador del elemento a modificar:</p>
CursoID_SE_MATRICULA :  <input name= "varCursoID" type="text" style="width:140px; margin:5px;border:1px solid steelblue; padding:5px; border-radius:5px" value="">
<br/>
AlumnoID_SE_MATRICULA :  <input name= "varAlumnoID" type="text" style="width:140px; margin:5px;border:1px solid steelblue; padding:5px; border-radius:5px" value="">
<br/>
<br/>
<p>Introduzca los nuevos valores:</p>
Importe :  <input name= "varImporte" type="text" style="width:140px; margin:5px;border:1px solid steelblue; padding:5px; border-radius:5px" value="">
<br/>
Fecha_de_compra :  <input name= "varFecha_de_compra" type="text" style="width:140px; margin:5px;border:1px solid steelblue; padding:5px; border-radius:5px" value="">
<br/>

<br/>
<br/>
<input style="color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue" type= "submit" value="Modificar"  /> <input style="color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue" type="reset" value="Restablecer"  />
<input style="color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue"type="button" value="P&aacute;gina anterior" onClick="history.go(-1);">
</form>
<?php 
}
else{
 $conex = mysqli_connect("localhost","usuarioWeb") or die("ERROR...");
	mysqli_select_db($conex,"DeraWebBD") or die("ERROR CON LA BASE DE DATOS");


		$CursoID = $_GET['varCursoID'];
		$AlumnoID = $_GET['varAlumnoID'];
		$Importe = $_GET['varImporte'];
		$Fecha_de_compra = $_GET['varFecha_de_compra'];
	$resultado = mysqli_query($conex,"UPDATE SE_MATRICULA SET Importe='$Importe' ,Fecha_de_compra='$Fecha_de_compra' WHERE CursoID='$CursoID'  AND AlumnoID='$AlumnoID' ");

		if($conex->affected_rows>0){
		echo "<p style=\"color:white; background-color:green; font-size=18px\">ACTUALIZACIÓN COMPLETADA CON EXITO</p>";
		echo "<input style=\"color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue\"type=\"button\" value=\"P&aacute;gina anterior\" onClick=\"history.go(-1);\">";
}
	else{
		echo "<p style=\"color:white; background-color:red; font-size=18px\">EL INDENTIDICADOR NO SE ENCUENTRA EN LA BASE DE DATOS, INTENTELO DE NUEVO. </p>";
		echo "<input style=\"color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue\"type=\"button\" value=\"P&aacute;gina anterior\" onClick=\"history.go(-1);\">";
}
	mysqli_close($conex);

}
?>
</div>
</div>
</body>
</html>
