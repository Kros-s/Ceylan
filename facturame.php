<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ferreteria Ceylan | Facturame</title>
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

  /*

  */

/*------------------------------------
 timeline styles
------------------------------------*/
.path-container {
  margin-top: 50px;
  margin-bottom: 70px;
}
.path-container .path-item h1 {
  text-align: center;
  margin-bottom: 70px;
}
.path-container .path-item h3 {
  margin-bottom: 10px;
  line-height: 1.15;
}
.path-container .path-item p {
  font-size: emCalc(16px);
  line-height: 1.7;
  margin-bottom: 25px;
}
.path-container .path-item a {
  font-weight: bold;
  font-size: emCalc(14px);
}
.path-container .path-item .circle {
  background-color: #ccc;
  background-size: 156px 156px;
  border-radius: 50%;
  width: 156px;
  height: 156px;
  position: relative;
  margin-bottom: 180px;
  z-index: 2;
}
.path-container .path-item .circle.circle-left {
  left: -7px;
}
.path-container .path-item .circle.circle-right {
  right: -10px;
}
.path-container .line {
  background: #ddd;
  width: 2px;
  bottom: 0;
  position: absolute;
  top: 160px;
  left: 50%;
  z-index: 0;
  height: 1164px;
}

/*------------------------------------
 medium timeline styles
------------------------------------*/
@media only screen and (max-width: 800px) and (min-width: 768px) {
  .line {
    display: none !important;
  }

  .large-5.columns.path-text {
    width: 70%;
    right: 0;
    margin-left: 15px;
  }

  .path-item .large-7 {
    width: 25%;
  }

  .push-5 {
    left: 0;
    float: right;
  }

  .circle-right {
    float: left;
    right: 0px !important;
  }

  .circle-left {
    left: 0px !important;
  }
}
/*------------------------------------
 mobile timeline styles
------------------------------------*/
@media only screen and (max-width: 767px) {
  .path-container {
    text-align: center;
  }
  .path-container .circle {
    top: 0;
    right: 0;
    left: 0;
    float: none;
    margin-bottom: 30px !important;
    margin-top: 60px;
    margin-left: auto;
    margin-right: auto;
  }
}
              
</style>
<body>
<!-- <div class="row">
  div.columns.large-12.small-12>div.panel.callout*5
</div> -->
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


          <li class="has-form">
            <div class="row collapse">
              <div class="large-8 small-9 columns">
                <input  type="text" placeholder="Buscar...">
              </div>
              <div class="large-4 small-3 columns">
                <a href="#" class="alert button expand">Search</a>
              </div>
            </div>
          </li>

          <li class="divider"></li>
          <li class="has-form">
            <a href="#" class="button  radius">Login</a>
          </li>
        </ul>

        <!-- Left Nav Section -->
        <ul class="left">
         <li class="has-dropdown">
          <a href="#">Catalogos</a>
          <ul class="dropdown">
            <li><a href="#">Ferreteria</a></li>
          </ul>
        </li>


      </ul>
    </section>
  </nav>
</div>

<!-- END  -->
 <div class="row">
<div class="columns">
   <ul class="breadcrumbs">
    <li ><a href="index.html">Inicio</a></li>
    <li class="current"><a href="#">Factura.me</a></li>    
  </ul>
  </div>
</div>      


<div class="path-container">
  <div class="row">
    <div class="large-12 columns ">
      <h1> Factura.me</h1>
    </div>
  </div>
  <div class="row path-item">
    <div class="large-7 push-5 columns">
      <div class="circle circle-left "></div>  <!-- Podemos cargar una imagen de tamaño circular -->
    </div>
    <div class="large-5 pull-7 columns path-text left">
      <h3>Obten tus facturas facilmente</h3>
      <p>Something that happened in the past or will happen in the future Lorem ipsum dolor sit amet, consectetur adipiscing elit.  a est. Suspendisse potenti. Sc lorem pretium, molestie</p>
      <a href="#">Show something cool Â»</a>
    </div>
  </div>
  <div class="row path-item">
    <div class="large-7 columns">
      <div class="circle circle-right right"></div>
    </div>
    <div class="large-5 columns path-text right">
      <h3>Lorem ipsum dolor sit amet, consectetur</h3>
      <p>Something that happened in the past or will happen in the future Lorem ipsum dolor sit amet, consectetur adipiscing elit.  a est. Suspendisse potenti. Sc lorem pretium, molestie</p>
      <a href="#">Show something cool Â»</a>
    </div>
  </div>
  <div class="row get-feedback path-item">
    <div class="large-7 push-5 columns">
      <div class="circle circle-left"></div>
    </div>
    <div class="large-5 pull-7 columns path-text left">
      <h3>Lorem ipsum dolor sit amet, consectetur</h3>
      <p>Something that happened in the past or will happen in the future Lorem ipsum dolor sit amet, consectetur adipiscing elit.  a est. Suspendisse potenti. Sc lorem pretium, molestie</p>
      <a href="#">Show something cool Â»</a>
    </div>
  </div>
  <div class="row land-job path-item">
    <div class="large-7 columns">
      <div class="circle circle-right right"></div>
    </div>
    <div class="large-5 columns path-text right">
      <h3>Lorem ipsum dolor sit amet, consectetur</h3>
      <p>Something that happened in the past or will happen in the future Lorem ipsum dolor sit amet, consectetur adipiscing elit.  a est. Suspendisse potenti. Sc lorem pretium, molestie</p>
      <a href="#">Show something cool Â»</a>
    </div>
  </div>
  <span class="line hide-for-small"></span>
</div>

<!--  -->
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
  </html>
