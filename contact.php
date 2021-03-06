<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<title>Devus Software</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="//code.jivosite.com/widget/KtTNGPwxl0" async></script>
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
                <li ><a href="about.php">Sobre Nosotros</a></li>
                <li class="dropdown ">
                    <a href="servicios.php">Servicios<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="desarrolloweb.php">Desarrollo Web</a></li>
                      <li><a href="sistemasweb.php">Sistemas Web</a></li>
                      <li><a href="lineagrafica.php">Línea Gráfica/Branding</a></li>
                    </ul>
                </li>
                <li><a href="support.php">Ayuda & Soporte</a></li>
                <li><a href="contact.php" class="active">Contactanos</a></li>
                <li><a class="chat-button" href="#">Chat now</a></li>
            </ul>
        </div>
    </div>
</nav>
<div id="top-content" class="container-fluid inner-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="page-title">Contactate con nosotros</div>
                <div class="page-subtitle">Algo en lo que podamos ayudarte?<br>Escribenos un mensaje, una persona de 
                nuestros equipo se pondrá en contacto contigo lo más pronto posible.</div>
            </div>
        </div>
    </div>
</div>
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
                <h4>Nuetra oficina</h4>
                <p>C/4ta, #5, Luisa Perla, Higuey, La Altagracia, Rep. Dom.</p>
                <h4>Telefonos</h4>
                <p>
                <div class="phone"> <a href="tel:+18292687105"><i class="fas fa-mobile"></i>_829-268-7105</a></div>
                <div class="phone"> <a href="tel:+18088726307"><i class="fas fa-phone"></i> 809-872-6307</a></div>
                </p>

                <h4>Nuestros correos</h4>
                <p>
                    <div class="email"> <a href="mailto:info@devus.software"><i class="fas fa-envelope" style="color: #1f8ded;"></i> info@devus.software</a></div>
                    <div class="email"> <a href="mailto:kberas@devus.software"><i class="fas fa-envelope" style="color: #1f8ded;"></i> kberas@devus.software</a></div>
                    <div class="email"> <a href="mailto:coo@devus.software"><i class="fas fa-envelope" style="color: #1f8ded;"></i> dvi@devus.software</a></div>
                </p>
                <!--
                <a class="lg-link" href="support.html">Technical Support <i class="fas fa-arrow-right" aria-hidden="true"></i></a>
                #se comento esta parte del codigo porque hasta el momento es innecesario-->
                <p class=""><br>No esperes más!!!<br>Ponte en contacto con nosotros.</p>
            </div>
        </div>
    </div>
</div>
<div id="more-info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title">Already have an account?</div>
                <div class="row-subtitle">Phasellus accumsan nisi eu arcu condimentum sollicitudin. Nulla auctor quis est at suscipit. <br>
Maecenas ac urna eget magna vulputate interdum.</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="get-started-button">Sign in to your account</a>
            </div>
        </div>
    </div>
</div> 
<div id="footer" class="container-fluid">  
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script> 
    $(document).ready(function () {
      $('#footer').load('footer.html');  //footer.html es el lemneto que se cargara en el footer de index.
      //se crea un scrip que cargue el elemento que deseamos mostrar
    });
  </script>
</body>
</html>
