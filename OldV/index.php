<?php
session_start();

if((isset($_REQUEST['pass'])) && ($_REQUEST['pass'] == "ferreteria")){
	
	
	$_SESSION['log'] = "yes";
	header("Location: index_2.php?ready=true" . $_SESSION['log'] . "ss" );
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
  <p>&nbsp;</p>
  <form id="form1" name="form1" method="post" action="">
    <p>Iniciar Sesion:</p>
    <p>
      <label for="Clave">Password:</label>
      <input name="pass" type="password" id="pass" value="" size="45" />
    </p>
    <p>
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