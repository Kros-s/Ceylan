<?php
include("DB/BD.php");
include("DB/Registros.php");
if(isset($_REQUEST['id'])){
	$ele = $_REQUEST['id'];
	$Reg->CambiaStatus("ACTIVO", $ele);	 
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
	Echo "Total de registros: ". $Reg->NumReg();
	$Reg->writeTable("Telmex", 'ACTIVO');
	$Reg->writeTable("Telmex", 'PAGADO');
	$Reg->writeTable("CFE", 'ACTIVO');
	$Reg->writeTable("CFE", 'PAGADO');
	$Reg->writeTable("SKY", 'PAGADO');
	$Reg->writeTable("SKY", 'ACTIVO');
  ?>
  </table>
  </div>
  </div>
</div>
<div id="footer">Sistema de Registro desarrollado por @iMarkox </div>
</body>
</html>