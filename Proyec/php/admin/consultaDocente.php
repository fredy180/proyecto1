<?php
session_start();

if ( $_SESSION[ "idAdmin" ] != "" ) {
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

		<script>
			var ordenar = 0;
		</script>
	</head>

	<body>
		<!-- MENU DE NAVEGACION -->

		<nav class="teal  header">
			<div class="nav-wrapper"> <a href="#" class="brand-logo"><img alt="LOGO" src="../../imagenes/logo.png" width="250"></a> <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					
					<li><a href="registroDocente.php"><i class="material-icons left">inbox</i>ADMISTRADOR</a>
					</li>
					<li><a href="login.html"><i class="material-icons left">person_outline</i>SALIR</a>
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
						<div class="collection"> <a href="registroDocente.php" class="collection-item"> REGISTRAR DOCENTE</a>
							<a href="consultaDocente.php" class="collection-item active"> CONSULTAR DOCENTE</a>
							<a href="edicionDocente.php" class="collection-item">EDICION DOCENTE</a>
						</div>
					</div>
				</div>
			</div>
			<div id="articles">
				<div class="col s12 m7 l9 z-depth-3">
					<!-- Note that "m8 l9" was added -->
					<div class="row  offset-s4 teal ">

						<div class="col s12 m12 l6 ">
							<label class="white">Filtar Busqueda</label>
							<select class="browser-default filtro white">
								<option value="0">Codigo</option>
								<option value="1">Nombre</option>
								<option value="2">Apellido</option>
								<option value="3">Grado</option>
								<option value="4">Sexo</option>
							</select>
						</div>
						<div class="input-field col s12 m12 l5 white ">
							<input type="search" id="myInput" onkeyup="buscarDocente()" required style="margin-top: 10px;" placeholder="Buscar por contenido...">
							<label class="label-icon" for="search"><i class="material-icons"></i></label>


						</div>
						<hr class="col s12">

					</div>
					<div class="row">

						<table class="responsive-table highlight centered bordered" id="tabla">
							<thead>
								<tr class="header">
									<th>CODIGO</th>
									<th>NOMBRE</th>
									<th>APELLIDO</th>
									<th>GRADO</th>
									<th>SEXO</th>
									<th>TELEFONO</th>

								</tr>
							</thead>

							<tbody>
								<?php

								require( "../conexion.php" );

								$sql2 = $mysqli->query( "SELECT * FROM `docente" );
								$con = 0;
								while ( $fila = mysqli_fetch_assoc( $sql2 ) ) {
									$con = $con + 1;
									echo "<tr>" .
									"<td>" . $fila[ 'iddocente' ] . "</td>" .
									"<td>" . $fila[ 'nombre' ] . "</td>" .
									"<td>" . $fila[ 'apellido' ] . "</td>" .
									"<td>" . $fila[ 'gradoEncargado' ] . "</td>" .
									"<td>" . $fila[ 'sexo' ] . "</td>" .
									"<td>" . $fila[ 'telefono' ] . "</td>" .


									"</tr>";

								}


								?>

							</tbody>
						</table>



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
		<script>
			$( ".filtro" ).change( function () {;
				ordenar = $( ".filtro" ).val();



			} );


			function buscarDocente() {
				var input, filter, table, tr, td, i;
				input = document.getElementById( "myInput" );
				filter = input.value.toUpperCase();
				table = document.getElementById( "tabla" );
				tr = table.getElementsByTagName( "tr" );
				for ( i = 0; i < tr.length; i++ ) {
					td = tr[ i ].getElementsByTagName( "td" )[ ordenar ];
					if ( td ) {
						if ( td.innerHTML.toUpperCase().indexOf( filter ) > -1 ) {
							tr[ i ].style.display = "";
						} else {
							tr[ i ].style.display = "none";
						}
					}
				}
			}
		</script>
	</body>

	</html>
	<?php
} else {
	header( "location:../../index.php" );
}
?>