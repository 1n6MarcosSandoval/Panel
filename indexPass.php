<?php
	include 'functions.php';
	include 'vars.php';
	
	session_cache_limiter('private');
	$cache_limiter = session_cache_limiter();
	session_start();
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);
	$stid = oci_parse($conOracle, 'SELECT * FROM CENACOM.URVER');
	if (!$stid) {
		$e = oci_error($conOracle);
		print "error de conexi&oacute;n";
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}

	// Perform the logic of the query
	$r = oci_execute($stid);
	if (!$r) {
		$e = oci_error($stid);
		print "error de ejecución";
		trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
	}
	
	function recuperaCamp($conOr,$user){
		$stid = oci_parse($conOr, 'SELECT * FROM CENACOM.URVER');
		$r=oci_execute($stid);
		if (!$r) {
			$e = oci_error($stid);
			print "error de ejecución";

		}
		while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
			if($row["US"]==$user)
				return $row["PSD"];
			
		}
	}
	
	if((@$_POST["amigo"])&&(@$_POST["claveAmigo"])){
		$canservero="incorrecto";
		
		if(($_POST["amigo"]=="usuarioMapa") && ($_POST["claveAmigo"]=="alberca")){
			$_SESSION['login'] = "usuarioMapa";
			header("Location:index.php");
		}else{
			$user=sanitize_paranoid_string($_POST["amigo"],0,25);
			$contra=sanitize_paranoid_string($_POST["claveAmigo"],0,25);
			//$pass=recuperaCamp($conOracle,'CENACOM.ADMINISTRADORES','PASSWORD',$user,'USUARIO');
			$pass=recuperaCamp($conOracle,$user);
			if($pass==$contra)
				$canservero="correcto";
			if($canservero=="correcto"){
				$_SESSION['login'] = "si";
				$_SESSION['nombre'] = $_POST["amigo"];
				//print $_SESSION['login'];
				header("Location:principal.php");		
			}else{
				$_SESSION['tmptxt']="Tu no pasaraaaaaaaas!";
				$_SESSION['login'] = "no";
				header("Location:index.php");
			}

		}


	}
?>

<head><title>Reportes relevantes</title>
		<link rel="stylesheet" href="images/style.css" type="text/css" />
</head>
<body BACKGROUND="img/fondo_tapiz.jpg" width="100%">
<div align="center">
<img src="img/cenacom3.png" width="100%">		
<h1>Panel de acceso</h1>
<div>

<form name="datosIngreso" method="post" form action="index.php">
  <p>Usuario: 
    <input name="amigo" type="text" size="25" maxlength="25">
  </p>
  <p>Contrase&ntilde;a: 
    <input name="claveAmigo" type="password" size="25" maxlength="25">
  </p>
  <p> 
    <input name="Submit" type="submit" id="Submit" value="Entrar">
  </p>
  <p>&nbsp; </p>
</form>



</div>
</p>
</div>
</div>
<?php
	//cerrarConexionORACLE($conOracle);
?>
</body>
</html>