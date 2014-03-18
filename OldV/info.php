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
<div id="menu">Inicio | <a href="history.php">Historial</a> | Ayuda 
  <div id="Menu_Section">
    <input type="image" name="pagos" id="pagos" src="images/home.png"  /><input type="image" name="history" id="history" src="images/accept.png" />
  </div>
  
</div>
<div id="content">
<div id="central">
	
  <?php
    include("DB/BD.php");
  $res=$bd->Execute("SELECT SUM(monto) AS TOTAL FROM pagos WHERE status LIKE 'ACTIVO'");
//  print_r($res);
  echo "<span class='bold'>El monto total es de: " . $res[0][0] . "</span>";
  ?>
  <p>Aqui tenemos un listado de <span class="bold">status de los Servicios</span>:</p>
  <?php

  $res=$bd->Execute("SELECT * FROM pagos WHERE status LIKE 'ACTIVO'");
  if(!empty($res))
  {
	  echo"<table align='center'>
  <tr class='red'><th>Compañia</th><th>Cliente</th><th>Referencia </th><th>Monto</th><th>Fecha</th><th>Status</th></tr>";
  
  foreach($res as $ele)
  {
	  
	  switch($ele['pago'])
	  {
		  case'Telmex':$var = substr($ele['ref'],2,8);break;
		  default:$var = $ele['ref'];
	  }
	  echo "<tr class='green'><td>$ele[pago]</td><td>$ele[Nombre]</td> <td>" . $var . "</td> <td class='bold'>$ele[monto]</td> <td>$ele[fecha]</td><td>$ele[status]</tr>";
  }}else
  
	  echo "<p align='center' class='bold'>POR EL MOMENTO NO HAY REGISTROS ACTIVOS</p>";
  

  ?>
  </table>
  <?php
  $res=$bd->Execute("SELECT SUM(monto) AS TOTAL FROM pagos WHERE status LIKE 'ACTIVO'");
//  print_r($res);
  echo "<span class='bold'>El monto total es de: " . $res[0][0] . "</span>";
  ?>
  </div>
  </div>
</div>
<div id="footer">Sistema de Registro desarrollado por @iMarkox </div>
</body>
</html>