<?php
session_start();

if((isset($_REQUEST['pass'])) && ($_REQUEST['pass'] == "ferreteria")){
  
  
  $_SESSION['log'] = "yes";
  header("Location: index_2.php?ready=true" . $_SESSION['log'] . "ss" );
}

?>
<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ferreteria Ceylan | Index</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <script src="js/vendor/modernizr.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <link rel="stylesheet" href="foundation-icons.css" />
</head>
<style type="text/css">

  .top-bar input {
    height: auto;
    padding-top: 0.45rem;
    padding-bottom: 0.35rem;
    font-size: 0.75rem;
  }


  .signup-panel {
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 15px;
  margin-top: 30px;
}
.signup-panel i {
  font-size: 30px;
  line-height: 50px;
  color: #999;
}
.signup-panel form input, .signup-panel form span {
  height: 50px;
}
.signup-panel .welcome {
  font-size: 26px;
  text-align: center;
  margin-left: 0;
}
.signup-panel p {
  font-size: 13px;
  font-weight: 200;
  margin-left: 25%;
}
.signup-panel .button {
  margin-left: 35%;
}
              
</style>
<body>
  <div class="contain-to-grid sticky" data-options="sticky_on: large">
    <!-- Top Bar-->
    <nav class="top-bar" data-topbar>
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">Ferreteria Ceylan</a></h1>
        </li>

        <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- Right Nav Section -->
        <ul class="right">


         <!--  <li class="has-form">
            <div class="row collapse">
              <div class="large-8 small-9 columns">
                <input  type="text" placeholder="Buscar...">
              </div>
              <div class="large-4 small-3 columns">
                <a href="#" class="alert button expand">Search</a>
              </div>
            </div>
          </li> -->
          <li class="divider"></li>
          <li class="has-dropdown">
          <a href="#">Registro de Pagos</a>
          <ul class="dropdown">
            <li><a href="#">Nuevo</a></li>
            <li><a href="#">Historial</a></li>
            <li><a href="#">Información</a></li>
          </ul>
        </li>
          <li class="divider"></li>
          <li class="has-form">
            <a href="pagos.php" class="button  radius">Login</a>
          </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
         


      </ul>
    </section>
  </nav>
</div>

<br>
<br>
<br>
<br>

 <div class="row">
    <div class="large-6 columns small-centered">
      <div class="signup-panel">
        <p class="welcome"> Inicia Sesion</p>
        <form action="pagos.php" method="POST" >         
          <div class="row collapse">
            <div class="small-2 columns ">
              <span class="prefix"><i class="fi-lock"></i></span>
            </div>
            <div class="small-10 columns ">
              <input type="password" name="pass" placeholder="password">
            </div>
          </div>
        </form>
        <input type="submit" class="radius button" value="Send">
         <!-- <p>Already have an account? <a href="#">Login here &raquo</a></p> -->
      </div>
    </div>
   </div>    

<!--  -->

 
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
  </html>
