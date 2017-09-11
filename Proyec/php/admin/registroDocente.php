<?php
session_start();

if($_SESSION["idAdmin"]!=""){
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMINISTRADOR</title>
	<script src="../../JavaScript/jquery-1.11.2.min.js" type="text/javascript"></script>
	<script src="../../JavaScript/materialize.min.js" type="text/javascript"></script>
	<script src="../../JavaScript/materialize.js" type="text/javascript"></script>
	<link href="../../CSS/materialize.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../../CSS/estilo.css">
	<link rel="stylesheet" href="../../CSS/materialize.css"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script>
		$( document ).ready( function () {
			$( ".button-collapse" ).sideNav();

			$( document ).ready( function () {
				$( 'select' ).material_select();
			} );


		} );
	</script>
</head>

<body>
	<!-- MENU DE NAVEGACION -->

	<nav class="teal  header">
			<div class="nav-wrapper"> <a href="#" class="brand-logo"><img alt="LOGO" src="../../imagenes/logo.png" width="250"></a> <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					
					<li><a href="registroDocente.php"><i class="material-icons left">inbox</i>ADMISTRADOR</a>
					</li>
					<li><a href="../salir.php"><i class="material-icons left">person_outline</i>SALIR</a>
					</li>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					
					<li><a href="registroDocente.php"><i class="material-icons left">inbox</i>ADMINISTRADOR</a>
					</li>
					<li><a href="../salir.php"><i class="material-icons left">person_outline</i>SALIR</a>
					</li>
				</ul>
			</div>
		</nav>

	<!------ contenedor--------->
	<div class="row contenido">
		<div class="col s12 m5 l3">
			<div class="z-depth-3"> <br>
				<br>
				<div class="card z-depth-2">
					<div class="card-content center">
						<h2>MENÚ</h2>
						<hr>
					</div>
					<div class="collection"> <a href="productos.html" class="collection-item active"> REGISTRAR DOCENTE</a>
						<a href="consultaDocente.php" class="collection-item"> CONSULTAR DOCENTE</a>
						<a href="edicionDocente.php" class="collection-item">EDICION DOCENTE</a>
					</div>
				</div>
			</div>
		</div>
		<div id="articles">
			<div class="col s12 m7 l9 z-depth-3">
				<!-- Note that "m8 l9" was added -->
				<div class="row">

					<form class="col s12" action="insertarDocente.php" method="post">
						<div class="row">
							<div class="input-field col s12 m12 l6 ">
								<input id="identificacion" type="number" class="validate " required name="identificacion">
								<label for="identificacion">IDENTIFICACION</label>
							</div>
							<div class="input-field col s12 m12 l6">
								<input id="contrasena" type="password" class="validate" required name="contrasena">
								<label for="cotrasena">CONTRASEÑA</label>
							</div>
												
							<div class="input-field col s12 m12 l6">
								<input id="nombre" type="text" class="validate" required name="nombre">
								<label for="nombre">NOMBRES</label>
							</div>
						
							<div class="input-field col  s12 m12 l6">
								<input id="apellido" type="text" class="validate" required name="apellido">
								<label for="apellido">APELLIDOS</label>
							</div>
							
						
							<div class="col  s12 m12 l6">
								<label>GRADO</label>
								<select class="browser-default" name="grado" required>
									<option value="" disabled selected>GRADO ENCARGADO</option>
									<option value="9">GRADO 9°</option>
									<option value="10">GRADO 10°</option>
									<option value="dos">AMBOS°</option>
								</select>
							</div>
							<div class="col  s12 m12 l6">
								<label>SEXO</label>
								<select class="browser-default" name="sexo" required>
									<option value="" disabled selected>SEXO DOCENTE</option>
									<option value="MASCULINO">MASCULINO</option>
									<option value="FEMENINO">FEMENINO</option>
								</select>
							</div>
							
							<div class="input-field col  s12 m12 l6">
								<input id="telefono" type="number" class="validate" required name="telefono">
								<label for="telefono">TELEFONO</label>
							</div>
							
						
						</div>
						
				<center><button class="btn waves-effect waves-light" type="submit" name="action">GUARDAR</button></center>
					</form>

				</div>

			</div>
		</div>
	</div>

	<!-- ESTA ES LA SECCIÓN DE PIE DE PAGINA -->
	<footer class="page-footer  teal darken-3">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Contacto.</h5>
					<p class="grey-text text-lighten-4">Institucion Educativa</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright teal darken-4">
			<div class="container"> Sincelejo © 2006-2017 </div>
		</div>
	</footer>
	
</body>

</html>
<?php
    }else{
     header("location:../../index.php");
}
?> 