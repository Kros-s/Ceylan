<?php
include("DB/BD.php");
function redondear_dos_decimal($valor) { 
   $float_redondeado=round($valor * 100) / 100; 
   return $float_redondeado; 
} 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registro de Pagos  de Serviciios de Ceylan</title>
<script src="js/index.js" type="text/javascript"></script>
<link href="css/style-index.css" rel="stylesheet" type="text/css" />

<link href="css/style-info.css" rel="stylesheet" type="text/css" />
</head>

<body><div id="xcontent">
<div id="header"> Sistema de Registro de Pagos de Servicios </div>
<div id="menu">Inicio | <a href="history.php">Historial</a> | Ayuda |
  <div id="Menu_Section">
    <input type="image" name="pagos" id="pagos" src="images/home.png"  /><input type="image" name="history" id="history" src="images/accept.png" />
  </div>
  
</div>
<div id="content">
<div id="central">
  <p>Aqui tenemos un listado de <span class="bold">status de los Servicios</span>:</p>
  <?php
  
  $res = $bd->Execute("SELECT * FROM factura");
  if(!empty($res))
  {
	  echo"<table align='center'> <tr class='red'><th>Folio</th><th>Cliente </th><th>RFC</th><th>Fecha</th><th>TOTAL</th><th>SUB-TOTAL</th></tr>";
	  foreach($res as $fact){
		  //echo" Folio:" . $fact['Folio']. "<br>";
		  echo "<tr class='green'><td>" . $fact['Folio'] . "</td> <td>" . $fact['Cliente'] . "</td> <td>" . $fact['RFC']." </td><td>  ".$fact['Fecha'] . "</td>";
		  $total=0;
		  $precio = $bd->Execute("SELECT Precio, Cantidad FROM art_fact WHERE Folio = ". $fact['Folio']);
		  foreach($precio as $cant){
			  $total+=$cant['Precio']*$cant['Cantidad'];
		  }
		  echo"<td class='bold'> \$" . $total . "</td><td class='bold'> \$" . redondear_dos_decimal(($total/1.16)) . "</td></tr>";
	  }
  }
?>

  </div>
</div>
<div id="footer">Sistema de Registro desarrollado por @iMarkox </div>
</body>
</html>