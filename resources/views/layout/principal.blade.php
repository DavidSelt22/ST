<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="icon" type="image/png" href="img/icono.png" />
  <title>Stark Tecnologies</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oxygen|Oswald" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
   <link rel="stylesheet" href="css/hover.css">
   <link href="https://fonts.googleapis.com/css?family=Orbitron:700|Scada" rel="stylesheet">
     <link href="css/bootstrap2.css" rel="stylesheet">
     
    <!-- Start WOWSlider.com HEAD section -->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <!-- End WOWSlider.com HEAD section -->
    <script src="js/bootstrap.js"></script>

</head>
<body>
  
     <header id="cabeza">
      
      <div class="contenedor">
        <div id="logotipo"></div>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="#" class="hvr-underline-reveal" id="sr">SERVICIOS</a>        
          <a href="#"  class="hvr-underline-reveal" id="pp" >PLANES Y PRECIOS</a>
          <a href="#"  class="hvr-underline-reveal" id="c">CONTACTO</a>
          <a href="http://cms.starktech.com.ar/login"  class="hvr-underline-reveal" id="cont">INGRESO CMS</a>
        </nav>
      </div>
    </header> 
          
              
    <div class="flecha"></div>
  

@yield('sliderppal')

<div class="separador deslizarservicios"></div><!--SEPARADOR SUPERIOR TITULO PPAL-->
    
<div class="presentacion">
    <p>Bienvenidos a</p>
    <h1>STARK TECHNOLOGIES</h1>
    <a href="#" id="sr2">CONOZCA NUESTROS SERVICIOS</a>
</div>
      
      <!--TITULO SERVICIOS-->  
    <div class="container">
        <div class="row" class="col-md-12" id="nuestserv">
            <h1>NUESTROS SERVICIOS</h1>
        </div>
         <div class="row" class="col-md-12" id="linea">
            <div class="linearoja"></div>
        </div>
            
    </div>
     
     @yield('distintoservicios')<!--Contenido servicios-->   
    

<!--TITULO PLANES Y PRECIOS-->
      <div class="separador deslizarplanes"></div>
         <div class="container deslizarplanes">
        <div class="row" class="col-md-12" id="nuestserv">
            <h1>PLANES Y PRECIOS</h1>  
        </div>
        
         <div class="row" class="col-md-12" id="linea">
            <div class="linearoja"></div>
        </div>
           
        <div class="row" class="col-md-12" id="nuestservp">
            Acceda a nuestros planes y precios a muy bajo costo.
        </div>   
            
    </div>
      
      @yield('planesyprecios')<!--Contenido planes-->   
  
     <!--TITULO NUESTROS CLIENTES-->
     <div class="container">
        <div class="row" class="col-md-12" id="nuestserv">
            <h1>Nuestros Clientes</h1>  
        </div>
        
         <div class="row" class="col-md-12" id="linea">
            <div class="linearoja"></div>
        </div>  
            
    </div>
         
  
     @yield('clientes')<!--Contenido clientes-->
     

     @yield('mandarmensaje')<!--Mandar mensaje-->
    
     
    <div class="container-fluid contacto">
        <div class="row">
            <div class="col-md-7 mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.504304810932!2d-60.223871785139146!3d-33.33177239881655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b7678de44ea9e5%3A0x65665e50d9a98a9f!2sSan+Mart%C3%ADn+92%2C+San+Nicol%C3%A1s+de+Los+Arroyos%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1518550637757" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-3 datos">
                <h1>Contácto</h1>
                <p><b>Direc.:</b> San Martín 92 - San Nicolás de los Arroyos - Bs. As. - Argentina</p>
                <p><b>Tel.:</b> (3364) 362286 (Bruno) / (3364) 631355 (Agustín)</p>
                <p><b>E-Mail:</b> ventas@starktech.com.ar</p>
            </div>
        </div>
    </div>

  <div class="container-fluid footer">
      <div class="row">
          <div class="col-md-6 cpy">
              <p>Copyright © Starktech 2018</p>
          </div>
          <div class="col-md-6 redes">
              <a href="https://m.facebook.com/starktechsn/"><div class="facebook hvr-grow"></div></a>
              <a href="#"><div class="instagram hvr-grow"></div></a>
          </div>
          
      </div>
  </div>
  
      


<script src="js/javastark.js"></script>

  
</body>
</html>