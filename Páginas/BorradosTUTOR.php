<html>
	<head>
	<title>TUTOR</title>
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
<h1>Borrados</h1><h1 style="font-size:40px">"TUTOR"</h1>
<?php 
if (!(isset($_GET['varTutorID']))){
?>
<form class="linea1">
<p>Escriba el identicador del dato que desea borrar:</p>
<p><i><u>TutorID</u> : </i><input name= "varTutorID" type="text" style=" margin:10px 5px 10px 4px; width:140px; margin:5px; border:1px solid steelblue; padding:5px; border-radius:5px" value="">
<br/>

<br/>
<br/>
<input style="color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue" type= "submit" value="Eliminar"  /> <input style="color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue" type="reset" value="Restablecer"  />
<input style="color: aliceblue;margin: 20px auto;font-size: 16px;cursor:pointer;border-radius: 5px;border:none;padding: 7px; background-color:steelblue"type="button" value="P&aacute;gina anterior" onClick="history.go(-1);">
</form>
<?php 
}
else{
 $conex = mysqli_connect("localhost","usuarioWeb") or die("ERROR...");
	mysqli_select_db($conex,"DeraWebBD") or die("ERROR CON LA BASE DE DATOS");


		$TutorID = $_GET['varTutorID'];
	$resultado = mysqli_query($conex,"DELETE FROM TUTOR WHERE TutorID='$TutorID'");

		if($conex->affected_rows>0){
		echo "<p style=\"color:white; background-color:green; font-size=18px\">BORRADO COMPLETADO CON EXITO</p>";
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
