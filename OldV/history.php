<?php
session_start();

if(isset($_SESSION['log'])){
	include("DB/BD.php");
	if(isset($_REQUEST['id']))
	{
		
		$change = $bd->Upload("UPDATE pagos SET status = 'PAGADO' WHERE Id_Pago = " . $_REQUEST['id']);
		 
	}
}else{
	header("Location: index.php");
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
  //include("DB/BD.php");
  $res=$bd->Execute("SELECT * FROM pagos ORDER BY fecha DESC ");
  if(!empty($res))
  {
	  echo"<table align='center'>
  <tr class='red'><th>Compañia</th><th>Referencia </th><th>Monto</th><th>Fecha</th><th>Status</th></tr>";
  
  foreach($res as $ele)
  {
	  
	  switch($ele['pago'])
	  {
		  case'Telmex':$var = substr($ele['ref'],2,8);$pago = $ele['status'];break;
		  case 'CFE': $var = substr($ele['ref'], 2, 12);$pago = $ele['status'];break;
		  default:$var = $ele['ref'];
	  }
	  if($pago == 'ACTIVO')
	  echo "<tr class='green'><td>$ele[pago]</td> <td>" . $var . "</td> <td>$ele[monto]</td> <td>$ele[fecha]</td><td class='bold'>$ele[status]<td><a href=history.php?id=$ele[Id_Pago]>Modificar</a></td></tr>";
	  else
	  echo "<tr class='yellow'><td>$ele[pago]</td> <td>" . $var . "</td> <td>$ele[monto]</td> <td>$ele[fecha]</td><td class='bold'>$ele[status]<td><a href=history.php?id=$ele[Id_Pago]>Modificar</a></td></tr>";
  }}else
  
	  echo "<p align='center' class='bold'>POR EL MOMENTO NO HAY REGISTROS ACTIVOS</p>";
  

  ?>
  </table>
  </div>
  </div>
</div>
<div id="footer">Sistema de Registro desarrollado por @iMarkox </div>
</body>
</html>