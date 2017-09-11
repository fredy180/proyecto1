<?php
			
session_start();
$_SESSION[ "idAdmin" ]=0;

				if ( $_POST ) {
					
					require( "php/conexion.php" );
					
					$id = $_POST[ 'usuario' ];
					$contra = $_POST[ 'password' ];
					$tipo=$_POST['tipo'];
					
					
					if($tipo=="Admin"){
						$sql2 = $mysqli->query( "SELECT * FROM `administrador` WHERE `idadministrador`='$id'" )or die( "<script>alert('error en Verificar 	usuario')</script>" );
					if ( $fila = mysqli_fetch_assoc( $sql2 ) ) {

						if ( $id == $fila[ 'idadministrador' ] ) {
							if ( $contra == $fila[ 'nombreAdministrador' ] ) {
								$_SESSION["idAdmin"] =$_POST[ 'usuario' ];
								header('Location: php/admin/registroDocente.php');
								
							} else {

								echo "<script>ERROR AL INGRESAR</script>";
							}
							

						}

					}
					}
					else if($tipo=="Docen"){
						$sql2 = $mysqli->query( "SELECT * FROM `docente` WHERE `iddocente`='$id'" )or die( "<script>alert('error en Verificar 	usuario')</script>" );
					if ( $fila = mysqli_fetch_assoc( $sql2 ) ) {

						if ( $id == $fila[ 'iddocente' ] ) {
							if ( $contra == $fila[ 'contraDocente' ] ) {
								$_SESSION["idAdmin"] =$_POST[ 'usuario' ];
								
								header('Location: php/docente/registroEstudiante.php');
							} else {

								echo "<script>ERROR AL INGRESAR</script>";
							}
							

						}

					}
					}
					else{
						$sql2 = $mysqli->query( "SELECT * FROM `estudiante` WHERE `idestudiante`='$id'" )or die( "<script>alert('error en Verificar usuario')</script>" );
					if ( $fila = mysqli_fetch_assoc( $sql2 ) ) {

						if ( $id == $fila[ 'idestudiante' ] ) {
							if ( $contra == $fila[ 'contrasena' ] ) {
								$_SESSION["idAdmin"] =$_POST[ 'usuario' ];
								$_SESSION["grado"]= $fila["grado"];
								header('Location: pagina/estudioEstudiante.php');
								
							} else {

								echo "<script>ERROR AL INGRESAR</script>";
							}
							

						}

					}
					}
					
					

				}
				?>