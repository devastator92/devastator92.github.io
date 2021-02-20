<?php


extension_loaded('mysqli')
	or die ("Mysqli extension not loaded. Please verify your PHP configuration.");

is_file("./config.php")
	or die("<a href=\"./install/install.php\">Run Installation Script</a>");

session_start();
include_once 'config.php'; // loads config variables
include_once 'query.php'; // imports queries
include_once 'functions.php';


$_SESSION[$CONFIG_name.'castles'] = readcastles();
$_SESSION[$CONFIG_name.'jobs'] = readjobs();

?>
<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="ExHarkonnen">
	<meta name="description" content="Panel de Control KMV Ragnarok">
    <!--STYLES-->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/menu_login.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

	<!--FAVICON-->
	<link rel="shortcut icon" href="images/favicon.png">
	<title>KMV Ragnarok Control Panel</title>
	<!--SCRIPT-->
	<script type="text/javascript" language="javascript" src="ceres.js"></script>
	<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
	<script type="text/javascript" language="javascript" src="js/menu.js"></script>
	<script type="text/javascript" language="javascript" src="js/menu_login.js"></script>

	<script>

</script>
</head>
	<!--<body background="images/background.png">-->

<body>
	<div class="contenedor">
		<div class="banner">
			<div class="logo">
				<div class="Cell1"></div>
			</div>
		</div>
		<div class="navigation">
			<div class="menu">
				<!--<div id="main_menu"></div>-->
				<div id="load_div"></div>
				<div id="menu_load"></div>
				<div class="cssmenu">
					<nav>
						<ul>
							<li><a>Inicio</a>
								<ul>
									<li><a id="motd" href="#">Message</a></li>
									<li><a id="links" href="#">Links</a></li>
								</ul>
							</li>

							<li><a>Ranking</a>
								<ul>
									<li><a id="p-ladder" href="#">Player Ladder</a></li>
									<li><a id="g-ladder" href="#">Guild Ladder</a></li>
									<li><a id="z-ladder" href="#">Top Zenny Ladder</a></li>
								</ul>
							</li>

							<li><a>Information</a>
								<ul>
									<li> <a id="online" href="#">Who is Online</a></li>
									<li> <a id="about" href="#">About</a></li>
								</ul>
							</li>

							<li><a>Cuenta</a>
								<ul>
									<li><a id="register" href="#">Registrarme</a></li>
									<li><a id="password" href="#">Cambiar contraseña</a></li>
									<li><a id="mail" href="#">Cambiar E-Mail</a></li>
								</ul>
							</li>

							<li><a>Problemas</a>
								<ul>
									<li><a id="position" href="#">Reset Posicion</a></li>
									<li><a id="look" href="#">Reset Look</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>

		</div>
	</div>
		<div class="mid">
			<div class="login">
				<div id="login_div"></div>
				<div id="new_div"></div>
				<div id="status_div"></div>
				<!--<div id="selectlang_div"></div>-->
			</div>
			<div id="text"></div>
		</div>
		<div class="foot">
			<div class="footer-distributed">
				<div class="footer-right">
				<div class="col-md-6 .col-md-offset-3">
                                 <ul class="social">
                                  <li class="facebook"><a href="http://facebook.com/KLGRagnarok" target="_blank"><i class="fa fa-facebook fa-1x"></i></a></li>
                                  <li class="twitter"><a href="http://twitter.com/KLG_Ragnarok" target="_blank"><i class="fa fa-twitter fa-1x"></i></a></li>
                                  <li class="behance2"><a href="https://www.instagram.com/klgragnarokoficial/" target="_blank"><i class="fa fa-instagram fa-1x"></i></a></li>
                                </ul>
                          </div>

			</div>
<div id="foot">
			<div class="footer-left">

				<p class="footer-links">
					<a href='http://www.kmvro.com' target="_blank">Home</a>
					·
					<a href='http://kmvro.com/foro' target="_blank">Foro</a>
					<!--·
					<a href="#">Pricing</a>
					·
					<a href="#">About</a>
					·
					<a href="#">Faq</a>
					·
					<a href="#">Contact</a>-->
				</p>

				<p>Kaos Latin Gamers Movistar Ragnarok &copy; 2016</p>
			</div>
				</div>
			</div>
		</div>
	</div>



		<!--CARGA ARCHIVOS-->
		<script type="text/javascript">
				load_menu();
				LINK_ajax('motd.php', 'main_div');
				LINK_ajax('login.php', 'login_div');
				login_hide(0);
				server_status('server_status.php');
				LINK_ajax('selectlang.php', 'selectlang_div');
				$(document).ready(function() {
						$.get("motd.php", function(htmlexterno){
								$("#text").html(htmlexterno);
							});
});

		</script>


	</body>
</html>


<?php
fim();
?>
