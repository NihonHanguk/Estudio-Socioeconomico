<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
	<link rel="stylesheet" href="estilo.css?1.0"/>
	<!- -->
	<meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
	<!- -->
	<title>Datos registrados</title>
</head>
<body background="PC Background (5).png">
	<header id="main-header">
		<div class="flexbox-align">
			<div class="encabezado">
				<img src="Logo SurveyTech.svg" class="logo">&nbsp;&nbsp;&nbsp;
			</div>
			<div class="encabezado">
				<h2>SurveyTech.com</h2>							
			</div>
		</div>		
		<div class="flexbox-align">
			<h1>ESTUDIO SOCIOECONÓMICO</h1>	
		</div>
	</header>
	<section id="main-content">
		<article>
			<div class="content" class="centrarParrafo">
				<div>
					<h2>Gracias por contestar este formulario.</h2>		
					<h3>Sus respuestas se presentan a continuación.</h3>
					<h3>Para regresar a la página principal, haga clic en "Regresar".</h3><br>
				</div>
				<h1>DATOS REGISTRADOS</h1>
				<?php
					include_once('conectarES.php');
					//Recibe todos los datos del formulario
					$nombres=$_POST['nombres'];
					$apellidoPaterno=$_POST['apellidoPaterno'];
					$apellidoMaterno=$_POST['apellidoMaterno'];
					$fechaNac=$_POST['fechaNac'];
					$curp=$_POST['curp'];
					$curpM=strtoupper($curp);
					$sexo=$_POST['rdbS'];
					$estado=$_POST['estado'];
					$nacionalidad=$_POST['nacionalidad'];
					$municipio=$_POST['municipio'];
					$localidad=$_POST['localidad'];
					$telefono=$_POST['telefono'];
					$email=$_POST['email'];
					$domicilio=$_POST['domicilio'];

					$ocupacion=$_POST['ocupacion'];
					$ingresos=$_POST['ingresos'];
					$ingresosFamiliares=$_POST['ingresosFamiliares'];
					$escolaridad=$_POST['escolaridad'];
					$personasCasa=$_POST['personasCasa'];
					$trabajadoresCasa=$_POST['trabajadoresCasa'];
					$ayudaGobierno=$_POST['rdbAG'];

					$tipoVivienda=$_POST['rdbV'];
					$numHab=$_POST['rdbHab'];
					$numBaños=$_POST['rdbB'];
					$techo=$_POST['rdbT'];
					$paredes=$_POST['rdbPR'];
					$piso=$_POST['rdbPS'];
					$elect=$_POST['rdbEE'];
					$agua=$_POST['rdbAP'];
					$alcant=$_POST['rdbAL'];
					$telefonica=$_POST['rdbTL'];
					$internet=$_POST['rdbIN'];
					$pav=$_POST['rdbCP'];
					$autos=$_POST['rdbAU'];
					$computadoras=$_POST['rdbPCS'];
					$celulares=$_POST['rdbCL'];
					$tv=$_POST['rdbTV'];

					$gastoAlimentos=$_POST['gastoAlimentos'];
					$gastoServicios=$_POST['gastoServicios'];
					$gastoRopa=$_POST['gastoRopa'];
					$gastoTransporte=$_POST['gastoTransporte'];
					$tiempoTransporte=$_POST['rdbTT'];
					$mascotas=$_POST['rdbMS'];

					echo '<h2 class="centrarParrafo">LOS DATOS RECIBIDOS SON LOS SIGUIENTES:</h2>';
					
					echo '<h3 class="centrarParrafo">DATOS DE IDENTIFICACIÓN:</h3>';
					echo "<p><u>Nombres:</u> ",$nombres,"</p>";		
					echo "<p><u>Apellido paterno:</u> ",$apellidoPaterno,"</p>";		
					echo "<p><u>Apellido materno:</u> ",$apellidoMaterno,"</p>";		
					echo "<p><u>Fecha de nacimiento:</u> ",$fechaNac,"</p>";
					echo "<p><u>CURP:</u> ",$curpM,"</p>";
					echo "<p><u>Sexo:</u> ",$sexo,"</p>";
					echo "<p><u>Nacionalidad:</u> ",$nacionalidad,"</p>";
					echo "<p><u>Estado:</u> ",$estado,"</p>";
					echo "<p><u>Municipio:</u> ",$municipio,"</p>";
					echo "<p><u>Localidad:</u> ",$localidad,"</p>";
					echo "<p><u>Teléfono:</u> ",$telefono,"</p>";
					echo "<p><u>Email:</u> ",$email,"</p>";
					echo "<p><u>Domicilio:</u> ",$domicilio,"</p>";

					echo '<h3 class="centrarParrafo">DATOS LABORALES:</h3>';
					echo "<p><u>Ocupación:</u> ",$ocupacion,"</p>";		
					echo "<p><u>Ingresos:</u> ",$ingresos,"</p>";		
					echo "<p><u>Ingresos familiares:</u> ",$ingresosFamiliares,"</p>";		
					echo "<p><u>Escolaridad:</u> ",$escolaridad,"</p>";		
					echo "<p><u>¿Cuántas personas viven con usted?:</u> ",$personasCasa,"</p>";		
					echo "<p><u>De las personas que viven con usted, ¿Cuántas trabajan?:</u> ",$trabajadoresCasa,"</p>";		
					echo "<p><u>¿Recibe algún tipo de ayuda del gobierno?:</u> ",$ayudaGobierno,"</p>";		

					echo '<h3 class="centrarParrafo">DATOS DE LA VIVIENDA:</h3>';
					echo "<p><u>La vivienda donde vive es:</u> ",$tipoVivienda,"</p>";		
					echo "<p><u>¿Cuántas habitaciones tiene su vivienda?:</u> ",$numHab,"</p>";		
					echo "<p><u>¿Cuántos baños tiene su vivienda?:</u> ",$numBaños,"</p>";		
					echo "<p><u>Material del techo de la vivienda:</u> ",$techo,"</p>";		
					echo "<p><u>Material de las paredes de la vivienda:</u> ",$paredes,"</p>";		
					echo "<p><u>Material del piso de la vivienda:</u> ",$piso,"</p>";		
					echo "<p><u>¿Su vivienda cuenta con energía eléctrica?:</u> ",$elect,"</p>";
					echo "<p><u>¿Su vivienda cuenta con servicio de agua potable?:</u> ",$agua,"</p>";
					echo "<p><u>¿Su vivienda cuenta con servicio de alcantarillado?:</u> ",$alcant,"</p>";
					echo "<p><u>¿Su vivienda cuenta con línea telefónica?:</u> ",$telefonica,"</p>";
					echo "<p><u>¿Su vivienda cuenta con conexión a internet?:</u> ",$internet,"</p>";		
					echo "<p><u>¿La calle principal de su domicilio está pavimentada?:</u> ",$pav,"</p>";
					echo "<p><u>¿Con cuántos automóviles y/o camionetas cuenta en su vivienda?:</u> ",$autos,"</p>";
					echo "<p><u>¿Con cuántas computadoras cuenta en su vivienda?:</u> ",$computadoras,"</p>";
					echo "<p><u>¿Con cuántos celulares cuenta en su vivienda?:</u> ",$celulares,"</p>";
					echo "<p><u>¿Con cuántas televisiones cuenta en su vivienda?:</u> ",$tv,"</p>";

					echo '<h3 class="centrarParrafo">DATOS DE GASTOS:</h3>';
					echo "<p><u>¿Cuánto gasta en alimentos mensualmente (MXN)?:</u> ",$gastoAlimentos,"</p>";
					echo "<p><u>¿Cuánto gasta en servicios mensualmente (MXN)?:</u> ",$gastoServicios,"</p>";
					echo "<p><u>¿Cuánto gasta en ropa mensualmente (MXN)?:</u> ",$gastoRopa,"</p>";
					echo "<p><u>¿Cuánto gasta en transporte mensualmente (MXN)?:</u> ",$gastoTransporte,"</p>";
					echo "<p><u>¿Cuánto tiempo tarda en trasladarse de casa al trabajo o la escuela?:</u> ",$tiempoTransporte,"</p>";
					echo "<p><u>¿Cuántas mascotas tiene?:</u> ",$mascotas,"</p>";

					$conectar=conn();
					$sql="INSERT INTO personas VALUES ('$curpM','$nombres','$apellidoPaterno','$apellidoMaterno','$fechaNac','$nacionalidad','$email','$estado','$municipio','$localidad','$domicilio','$sexo','$telefono','$ocupacion','$ingresos','$personasCasa','$escolaridad','$trabajadoresCasa','$numHab','$techo','$piso','$paredes','$tipoVivienda','$numBaños','$alcant','$elect','$agua','$telefonica','$autos','$internet','$computadoras','$tv','$celulares','$pav','$gastoTransporte','$tiempoTransporte','$gastoServicios','$gastoAlimentos','$gastoRopa','$mascotas','$ayudaGobierno','$ingresosFamiliares')";
					$result=mysqli_query($conectar,$sql) or trigger_error("Query Failed! SQL-Error: ".mysqli_error($conectar));
				?>	
				<form action="EstudioSocioeconómicoMainPage.html">
        			<input class="button" type="submit" value="Regresar">
    			</form>
			</div>
		</article>
	</section>
	<footer id="main-footer">
		<table>
			<tr>
				<td>
					<p>&copy; 2023 by Josué Eleazar Burgos Urías</p>
					<p>SurveyTech.com</p>
				</td>
				<td>
					<p>SOBRE EL DESARROLLADOR</p>
					<p>Hola, mi nombre es Josué Eleazar Burgos Urías, y soy el creador de este sitio.
						Actualmente soy estudiante de preparatoria, en la especialidad de programación.</p>					
				</td>
				<td>
					<p>SOBRE LA EMPRESA</p>
					<p>SurveyTech.com es una empresa que realiza encuestas online para realizar estadísticas, a fin de ayudar a otras empresas que contratan sus servicios a conocer mejor a sus clientes, y así puedan ofrecer mejores productos a estos.</p>
				</td>
			</tr>
		</table>
	</footer>
</body>
</html>