<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<title>Devus Software | Servicios</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
#more {display: none;}
</style>
</head>

<body>
<nav id="mainNav" class="navbar navbar-default navbar-full">
		<div class="container container-nav">
			<div class="navbar-header">
				<button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.php">
                <img class="logo" src="images/logo.png" alt="Devus">
            </a>
        </div>
        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
             <ul class="nav navbar-nav navbar-right">
                <li><a href="about.php">Sobre Nosotros</a></li>
                <li class="dropdown active">
                    <a href="servicios.php">Servicios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="desarrolloweb.php">Desarrollo Web</a></li>
                      <li><a href="sistemasweb.php">Sistemas Web</a></li>
                      <li><a href="lineagrafica.php">Linea Gráfica</a></li>
                    </ul>
                </li>
                <li><a href="support.php">Ayuda & Soporte</a></li>
                <li><a href="contact.php">Contactanos</a></li>
                <li><a class="chat-button" href="#">Chat now</a></li>
            </ul>
        </div>
    </div>
 </nav>
<div id="top-content" class="container-fluid inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">SERVICIOS</div>
                <div class="page-subtitle">Devus Software ofrece un monton de soluciones en el area de las TICs, Cada día sumando más.</div>
            </div>
        </div>
    </div>
</div>

 <div id="pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box green-after best-seller">
                    <div class="pricing-icon green-color"><img src="images/iconservices.png" alt="Diseño Web" style="width:100px;  border-radius: 50%;"></i></div>
                    <div class="pricing-title">Diseño Web</div>
                    <div class="pricing-details">
                        <ul>
                            <li>Asesorias, Creación de Página Web y Landing Pages, Correo Empresarial, etc.</li>
                        </ul>
                    </div>
                    <div class="pricing-amount">
                        <div>Desde</div>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">199.99</span>
                        </div>
                    </div>
                    <div class="pricing-button"><a href="desarrolloweb.php" class="green-button">Contáctanos Hoy</a></div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="pricing-box pink-after">
                    <div class="pricing-icon pink-color"><img src="images/iconservices2.png" alt="Sistemas Web" style="width:100px;  border-radius: 50%;"></i></div>
                    <div class="pricing-title">Sistemas Web</div>
                    <div class="pricing-details">
                        <ul>
                            <li>Sistemas Pos, Sistemas de cita/calendarios, Sistemas ERP, Sistemas CRM etc...</li>
                        </ul>
                    </div>
                    <div class="pricing-amount">
                        <div>Desde</div>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount">199.99</span>
                        </div>
                    </div>
                    <div class="pricing-button"><a href="sistemasweb.php" class="pink-button">Quiero Uno!</a></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="pricing-box purple-after">
                    <div class="pricing-icon purple-color"><img src="images/iconservices3.png" alt="Branding" style="width:100px;  border-radius: 50%;"></i></div>
                    <div class="pricing-title">Linea Gráfica y RRSS</div>
                    <div class="pricing-details">
                        <ul>
                            <li>Linea Grafica Empresarial, Logo, Brochure, Asesorias y Promoción en Redes Sociales etc.</li>
                        </ul>
                    </div>
                    <div class="pricing-amount">
                        <div>Desde</div>
                        <div class="price">
                            <span class="currency">$</span>
                            <span class="amount"> 29.99</span>
                        </div>
                    </div>
                    <div class="pricing-button"><a href="lineagrafica.php" class="purple-button">Vamos a Diseñar!</a></div>
                </div>
        </div>
    </div>
</div>
    </div>
</div>
<div id="get-started" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span id="dots"></span>
                <div class="text">No Sabes cómo empezar? Nosotros te ayudamos en el camino hacia la transformación digital.</div><br><br>
                <span id="more">  
                    <div id="details" class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="col-title">Formulario de contacto</div>
                                    <form id="contactform" method="post" autocomplete="off"  action="EnviarMensage.php">
                                        <div class="form-items-holder">
                                            <div class="form-text">
                                                <input type="text" name="nombre" placeholder="Nombre" required>
                                            </div>
                                            <div class="form-text">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                            <div class="form-text">
                                                <input type="text" name="tel" placeholder="Telefono/Celular" required>
                                            </div>
                                            <div class="form-text">
                                                <textarea name="mensage" placeholder="Escriba su mensaje aqui" required></textarea>
                                            </div>
                                            <div class="form-button"><input id="submit" type="submit" value="Enviar mensaje"></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-5 contacts">
                                    <div class="col-title">Otros contactos</div>
                                    <h4>Nuestra oficina</h4>
                                    <p>Higuey, La Altagracia, Rep. Dom.</p>

                                    <h4>Telefonos</h4>
                                    <p>
                                    <div class="phone"> <a href="tel:+18292687105"><i class="fas fa-mobile"></i> 829-268-7105</a></div>
                                    <div class="phone"> <a href="tel:+18088726307"><i class="fas fa-phone"></i> 809-872-6307</a></div>
                                    </p>

                                    <h4>Nuestros correos</h4>
                        <p>
                            <div class="email"> <a href="mailto:info@devus.software"><i class="fas fa-envelope" style="color: #1f8ded;"></i> info@devus.software</a></div>
                            <div class="email"> <a href="mailto:ceo@devus.software"><i class="fas fa-envelope" style="color: #1f8ded;"></i> ceo@devus.software</a></div>
                            <div class="email"> <a href="mailto:coo@devus.software"><i class="fas fa-envelope" style="color: #1f8ded;"></i> coo@devus.software</a></div>
                         </p>
                <!--
                <a class="lg-link" href="support.html">Technical Support <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                #se comento esta parte del codigo porque hasta el momento es innecesario-->
                           <p class=""><br>No esperes más!!!<br>Ponte en contacto con nosotros.</p>
                            </div>
                         </div>
                      </div>
                   </div>
                </span>
                   <div>
                        <button onclick="myFunction()" id="myBtn" class="gstart" style= "border: none">Empieza hoy!</button>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Contactanos"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.style.display = "none";
    moreText.style.display = "inline";
  }
}
</script>



<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-1">
                <img class="logo-mini" src="images/logo-mini.png" alt="Hostio" />
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h4>Company</h4>
                <ul class="footer-menu">
                    <li class="active"><a href="about.html">About us</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h4>Policy</h4>
                <ul class="footer-menu">
                    <li><a href="terms.html">Terms and Conditions</a></li>
                    <li><a href="policy.html">Copyright Policy</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h4>Services</h4>
                <ul class="footer-menu">
                    <li><a href="whosting.html">Web Hosting</a></li>
                    <li><a href="chosting.html">Cloud Hosting</a></li>
                    <li><a href="dhosting.html">Dedicated Hosting</a></li>
                    <li><a href="domain.html">Domain Names</a></li>
                </ul>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-2">
                <h4>Other links</h4>
                <ul class="footer-menu">
                    <li><a href="transfer.html">Transfer domains</a></li>
                    <li><a href="portal.html">Customer Portal</a></li>
                    <li><a href="support.html">Support Portal</a></li>
                    <li><a href="tutorials.html">Video Tutorials</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="phone"><i class="fa fa-phone"></i> 00 285 900 38502</div>
                <div class="email"><i class="fa fa-envelope"></i> hello@hostio.io</div>
                <div class="address">
                    <i class="fa fa-map-marker"></i> 
                    <div>Brizbin, Australia<br>
                        Road 398, Center<br>
                        Office 38, floor 3</div>
                </div>
                <div class="social">
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/main.js"></script>
</body>
</html>
