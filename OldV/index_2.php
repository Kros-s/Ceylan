<?php
session_start();
if(isset($_SESSION['log'])){
	if(isset($_REQUEST['seen']))
	{
		include ("DB/BD.php");
		$company = $_REQUEST['type'];
		$ref = $_REQUEST['ref'];
		$date = $_REQUEST['Date'];
		$money = $_REQUEST['cantidad']  ."." . $_REQUEST['cantidad2'];
		$nombre = $_REQUEST['Name_c'];
		$res = $bd->Upload("INSERT INTO pagos VALUES ('', '$company', '$nombre', '$ref', '$date', $money, 'ACTIVO')");
		if($res != 0)
			$res = "<p>EXITO AL REGISTRAR</p>";
		else
			$res = "<p>ERROR AL SUBIR AL LA BD</p>";
	}

}else{
	
	header("Location: index.php?noData=false");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Pagos  de Serviciios de Ceylan</title>
<script src="js/index.js" type="text/javascript"></script>
<link href="css/style-index.css" rel="stylesheet" type="text/css" />

</head>

<body><div id="xcontent">
<div id="header"> Sistema de Registro de Pagos de Servicios </div>
<div id="menu">Inicio | <a href="history.php">Historial</a> | Ayuda |
  <div id="Menu_Section">
    <input type="image" name="pagos" id="pagos" src="images/home.png"  /><input type="image" name="history" id="history" src="images/accept.png" />
  </div>
  
</div>
<div id="content">
  <p>NUEVA ACTUALIZACION DEL <a href="http://ceylan.hostzi.com/Version/protype.html">SISTEMA VERSION V2.0 PROXIMAMENTE</a></p>
  <p>Da de alta un nuevo <span class="bold">Pago de Servicio</span>:</p>
  <form id="form1" name="form1" method="post" action=""><div id="pago"><?php if(isset($res))
  echo $res;
  ?></div>
    <p>
      <label for="type">Tipo de Pago:</label>
      <select name="type" id="type">
        <option value="Telmex" selected="selected">Telmex</option>
        <option value="CFE">CFE</option>
        <option value="Cablevision">Cablevision</option>
        <option value="SKY">SKY</option>
      </select>
    </p>
    <p>
      <label for="Name_c">Nombre Cliente:</label>
      <input type="text" name="Name_c" id="Name_c" />
    </p>
    <p>
      <label for="Date">Fecha:</label>
      <input name="Date" type="text" id="Date" value="<?php 
	     date_default_timezone_set('America/Mexico_City'); 
	  echo date("Y-m-d");?>" />
    </p>
    <p>
      <label for="cantidad">Monto:</label>
      <input name="cantidad" type="text" id="cantidad" size="5" maxlength="4" />
    .
    <label for="cantidad2"></label>
    <input name="cantidad2" type="text" id="cantidad2" value="00" size="4" maxlength="2" />
    </p>
    <p>
      
      <label for="ref">Referencia:</label>
      <input type="text" name="ref" id="ref" />
    </p>
    <p align="center">
    <input type="hidden" name="seen" value="yes" />
      <input type="submit" name="button" id="button" value="Enviar" />
    </p>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</div>
<div id="footer">Sistema de Registro desarrollado por @iMarkox </div>
</body>
</html>