<?php
	include 'functions.php';
	include 'vars.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);

//include 'cec.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="es-mx" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" href="css/estilo.css">
<title>Panel</title>
<script>//setTimeout('document.location.reload()',10000); </script>
</head>

<body>

	
<?php
	include 'menu.php';
?>


<h1>Sistema de captura</h1>

		<!--IZQUIERDA -->
		<div class="left">
			<div class="lboxForm">
	<BR/>		
	<h2>Cambio de contrase&ntilde;a</h2>
	<BR/><BR/>
	
<?php
	/*Recuperar usuarios*/	
		$sqlUsuario = "select NOM from cenacom.URVER where US = '".$_SESSION['nombre']."'";
			//echo "sqlUsuario =".$sqlUsuario;
		$stid = oci_parse($conOracle,$sqlUsuario);
		oci_execute($stid);
		while ($row = oci_fetch_array($stid, OCI_ASSOC)) {
			$UsuarioRegistra = $row["NOM"];
		}
			//ECHO "UsuarioRegistra =".$UsuarioRegistra;
	/*Fin Recuperar usuarios*/	
	/*Validación de campos para cambio de contraseña*/
///////////////////////////////////////////////////////////	
	/*Validar pass*/
	if (@$_POST["passAct"]){
		$firephp->log($_POST["passAct"]);
		$valorpassAct=sanitize_sql_string($_POST["passAct"]);
	
		$querypassAct = oci_parse($conOracle,"select PASSWORD from CENACOM.ADMINISTRADORES WHERE NOMBRE_REP ='".$UsuarioRegistra."'");
		oci_execute($querypassAct);
		$rowpassAct = oci_fetch_array($querypassAct, OCI_NUM);
		$confipassAct = $rowpassAct[0];
		if ($valorpassAct != $confipassAct){
			echo "<div class='avisoError'>La contrase&ntilde;a ingresada no es la correcta.</div>";
	/*Fin Validar pass*/			
		}else{
		/*Validar nuevo pass*/
			if (@$_POST["passNueva"] AND @$_POST["passConfi"]){
				$firephp->log($_POST["passNueva"]);
				$valorpassNueva=sanitize_sql_string($_POST["passNueva"]);
				
				$firephp->log($_POST["passConfi"]);
				$valorpassConfi=sanitize_sql_string($_POST["passConfi"]);
				if ($valorpassNueva == $valorpassConfi){
					if($valorpassConfi == $valorpassAct){
						echo "<div class='avisoError'>La contrase&ntilde;a actual no debe ser igual a la nueva contrase&ntilde;a, favor de ingresar otros valores.</div>";
					}else{
						$delta = $valorpassConfi;
						$queryCam = oci_parse($conOracle,"UPDATE CENACOM.ADMINISTRADORES SET PASSWORD ='".$delta."' WHERE '".$valorpassNueva."'='".$valorpassConfi."' AND NOMBRE_REP ='".$UsuarioRegistra."'");
						if (!$queryCam) {
							$e = oci_error($conOracle);
							trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
						}
						$resultadoUpdate=oci_execute($queryCam);
						if (!$resultadoUpdate) {
							$e = oci_error($queryCam);
							trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
						}
						if($resultadoUpdate){
							echo '<div class="aviso"><b>Actualizaci&oacute;n correcta.</b><br/></div>';
						}
					}
				}else{
					echo "<div class='avisoError'>Las contrase&ntilde;as ingresadas no coinciden.</div>";
				}
			}
		}
		
		
///////////////////////////////////////////////////////////			

	}

	/*Fin Validación de campos para cambio de contraseña*/	
	echo	"<br/>";
?>
	
	Usuario :	
	<?php

		echo $UsuarioRegistra;
	?>
	<form method="post" id="fadmin" name="fadmin" action="cambio_u.php">
	<br/><br/>
	Contrase&ntilde;a actual:
	<input id="passAct" name="passAct" title="passAct" maxlength="20" size="30" type="password"/>		
	<br/><br/>
	Nueva contrase&ntilde;a:
	<input id="passNueva" name="passNueva" title="passNueva" maxlength="20" size="30" type="password"/>		
	<br/><br/>
	Confirmar nueva contrase&ntilde;a:
	<input id="passConfi" name="passConfi" title="passConfi" maxlength="20" size="30" type="password"/>		
	<br/><br/>
	
	
	<div id="boton">
		<input type="submit"  value="cambiar" />
	</div>
	</form>
	

<?php
	cerrarConexionORACLE($conOracle);
?>



</body>
</html>