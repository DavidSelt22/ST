@extends('layout.principal')


@section('sliderppal')
	 
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
	    <li><img src="data1/images/fotolia_35775709_subscription_xxl.jpg" alt="fotolia_35775709_subscription_xxl" title="fotolia_35775709_subscription_xxl" id="wows1_0"/></li>
	    <li><a href="#"><img src="data1/images/machine_learning.jpg" alt="jquery slideshow" title="machine_learning" id="wows1_1"/></a></li>
	    <li><img src="data1/images/eset_5_android_new_by_hikemand4bsu97.jpg" alt="eset_5_android_new_by_hikeman-d4bsu97" title="eset_5_android_new_by_hikeman-d4bsu97" id="wows1_2"/></li>
	  </ul></div>
	  <div class="ws_bullets"><div>
	    <a href="#" title="fotolia_35775709_subscription_xxl"><span><img src="data1/tooltips/fotolia_35775709_subscription_xxl.jpg" alt="fotolia_35775709_subscription_xxl"/>1</span></a>
	    <a href="#" title="machine_learning"><span><img src="data1/tooltips/machine_learning.jpg" alt="machine_learning"/>2</span></a>
	    <a href="#" title="eset_5_android_new_by_hikeman-d4bsu97"><span><img src="data1/tooltips/eset_5_android_new_by_hikemand4bsu97.jpg" alt="eset_5_android_new_by_hikeman-d4bsu97"/>3</span></a>
	  </div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
	<!--<div class="ws_shadow"></div>-->
	</div>  
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
@endsection

@section('distintoservicios')
 <div class="container">
        
        
       <div class="row" id="distintoservicios">
            <div class="color1 col-xs-12 col-sm-6 col-md-4" id="treservicios">
             <div class="icoaplic"></div>
             <h3>Aplicaciones WEB</h3>
             <p>
              Desarrollamos aplicaciones web adaptadas a la necesidad de su empresa. Los archivos en los que se trabajan son procesados y almacenados dentro de un servidor, esto trae la ventaja de que se puede acceder desde cualquier computadora o smartphone que tenga acceso a la red. Consulte por nuestro sistema de facturación con punto de venta apto para conectar al afip y realizar facturas electrónicas.
               
            </p>
            </div>
            <div class="color2 col-xs-12 col-sm-6 col-md-4" id="treservicios">
             <div class="icoweb"></div>
             <h3>Sitios web responsive</h3>
             <p>
              Desarrollamos sitios web que se adapten a su empresa con un diseño moderno, permitiendo ésta una comunicación más efectiva con el mercado. Además utilizamos un diseño responsive, permitiendo este el acceso al sitio tanto desde una pc como desde un smartphone o tablet. En la actualidad, un sitio web es un medio para promocionar su empresa y desarrollar estrategias de marketing.  
              </p>
            </div>
            <div class="color1 col-xs-12 col-sm-6 col-md-4" id="treservicios">
             <div class="icomant"></div>
             <h3>Mantenimiento de sistemas</h3>
             <p>
              Contamos con técnicos capacitados para realizar mantenimiento de hardware y software, haciendo que sus equipos mantengan siempre un funcionamiento óptimo.
             </p>
            </div>
          
        </div>
        
         <div class="row" id="distintoservicios">
              <div class="color1 col-xs-12 col-sm-6 col-md-4" id="asesoramiento">
             <div class="icoase"></div>
             <div class="tituloase"><h3>Asesor. en la actualización de tecnologías</h3></div>
             <p>
              En la actualidad las empresas requieren de un asesoramiento en las nuevas tecnologías, que les indique como generar innovación, mejorar sus procesos y diferenciarse ante la competencia; A parte de reducir costos y tiempo de desarrollo para nuevos productos.
             </p>
            </div>
            <div class="color2 col-xs-12 col-sm-6 col-md-4" id="asesoramiento">
             <div class="icodis"></div>
             <div class="tituloase"><h3>Diseño e implementación de redes</h3></div>
             <p>
              El diseño e implementación de redes requieren de un plan que tome en cuenta las necesidades del cliente, su capacidad de crecimiento estimado, las tecnologías disponibles, la identificación de medios, puntos de terminación y conexión.
             </p>
            </div>
            <div class="color1 col-xs-12 col-sm-6 col-md-4" id="asesoramiento">
              <div class="icocam"></div>
              <div class="tituloase"><h3>Venta e instalación de equipos de seguridad</h3></div>
             <p>
              Venta e instalación de cámaras de seguridad, alarmas, seguridad electrónica(controles de acceso y asistencia). 
             </p>
            </div>
         </div>
    </div>
@endsection

@section('planesyprecios')  
	<div class="row" id="portfolio">
	    <div class="col-md-4">
	      <div class="thumbnail basic">
	         <h3><b>Basic</b></h3>
	         <p><b><big>$17</big><small><i>/month</i></small></b></p>
	        
	          <img src="../img/intermedio.png" alt="Lights" style="width:100%">
	          <div class="caption">
	            <p>Software base con lo ppal. para operar</p>
	            <div class="raya center-block"></div>
	               <div class="lista center-block">
	                   <ul>
	                    <li>1 User</li>
	                    <li>1 Dashboard</li>
	                    <li>5 Proyect</li>
	                    <li class="sinitem"></li>
	                    <li class="sinitem"></li>
	                  </ul>
	              </div>
	          </div>
	         
	         <button type="button" class="btn btn-danger comprar center-block">Comprar ahora</button><div class="bajoboton"></div>
	      </div>
	    </div>
	      <div class="col-md-4">
	      <div class="thumbnail basic">
	         <h3><b>Business</b></h3>
	         <p><b><big>$34</big><small><i>/month</i></small></b></p>
	        
	          <img src="../img/basic.png" alt="Lights" style="width:100%">
	          <div class="caption">
	            <p>Software intermedio, opera al 80%.</p>
	            <div class="raya center-block"></div>
	               <div class="lista center-block">
	                   <ul>
	                    <li>1 User</li>
	                    <li>1 Dashboard</li>
	                    <li>5 Proyect</li>
	                    <li>3 Libraries</li>
	                    <li class="sinitem"></li>
	                  </ul>
	              </div>
	             
	          </div>
	         
	         <button type="button" class="btn btn-danger comprar center-block">Comprar ahora</button><div class="bajoboton"></div>
	      </div>
	    </div>
	      <div class="col-md-4">
	      <div class="thumbnail basic">
	         <h3><b>Premium</b></h3>
	         <p><b><big>$68</big><small><i>/month</i></small></b></p>
	        
	          <img src="../img/avanzado.png" alt="Lights" style="width:100%">
	          <div class="caption">
	            <p>Software avanzado con herr. de soporte.</p>
	            <div class="raya center-block"></div>
	               <div class="lista center-block">
	                   <ul>
	                    <li>1 User</li>
	                    <li>1 Dashboard</li>
	                    <li>5 Proyect</li>
	                    <li>6 Libraries</li>
	                    <li>2 Tecnic Suport</li>
	                  </ul>
	              </div>
	          </div>
	         
	         <button type="button" class="btn btn-danger comprar center-block">Comprar ahora</button><div class="bajoboton"></div>
	      </div>
	    </div>
	  
	  
	</div>
@endsection

@section('clientes')
 <div class="container nuevosclientes">
        
        
        <div class="row ">
            <div class="color1 col-xs-12 col-sm-6 col-md-2 cliente1">
              
            </div>
            <div class="color2 col-xs-12 col-sm-6 col-md-2 cliente2">
             
            </div>
            <div class="color1 col-xs-12 col-sm-6 col-md-2 cliente3">
            
            </div>
            <div class="color2 col-xs-12 col-sm-6 col-md-2 cliente4">
             
            </div>
            <div class="color2 col-xs-12 col-sm-6 col-md-2 cliente5">
             
            </div>
            <div class="color2 col-xs-12 col-sm-6 col-md-2 cliente6">
             
            </div>
             
           
        </div>
    </div>
@endsection

@section('mandarmensaje')
  <div class="fondomensaje deslizarcontacto">      
        
     <section id="contact">
     <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center mensaje">
                  <h2 class="section-heading ">Contáctenos</h2>
                   <div class="row" class="col-md-12" id="linea">
                    <div class="linearoja"></div>
                  </div>  
                  <h3 class="section-subheading text-muted">Envíenos su consulta, en breve será atendido por nuestro equipo administrativo.</h3>
              </div>
          </div>

        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" novalidate="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Nombre *" required="" data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="Correo *" required="" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="Teléfono *" required="" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Mensaje *" required="" data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-danger btn-xl botonmensaje" type="submit">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
              
  </div>
@endsection






