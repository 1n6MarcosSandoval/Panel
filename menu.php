<?php
//include 'cec.php';
	include_once 'functions.php';
	include_once 'vars.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);
		
	//Count for Alto
		$queryA = oci_parse ($conOracle, "SELECT COUNT (CR) AS VALOR FROM CENACOM.REPORTES");
		oci_execute($queryA);
		$row_fenomeno_A = oci_fetch_array($queryA, OCI_ASSOC);
		$Alto = $row_fenomeno_A["VALOR"];
		$datoA = $Alto;
	//End Count for Alto
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="es-mx" http-equiv="Content-Language" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />

<title>Menu</title>

</head>

<body>

	
<table width='100%'  height='100%'>
	<tr>
		<!--Logo-->
		<td>
			<div id="logo" class="logo">
				<img src="img/cenacom.png" width='100%'>
			</div>
		</td>
		<!--menu-->
		<td width='20%'>
		
			<div id="main">
				<ul id="navigationMenu">
    <li>
        <a class="Inicio" href="index.php">
            <span>Inicio</span>
        </a>
    </li>

    <li>
    	<a class="CENACOM" href="http://www.incendiosmovil.gob.mx/dcenacom">
            <span>CENACOM</span>
        </a>
    </li>

    <li>
         <a class="Servicios" href="servicios.php">
            <span>Servicios</span>
         </a>
    </li>
	<br/>
	<br/>
	Total de reportes en el aplicativo:<?php echo $datoA;?>


</ul>
			</div>
		</td>
	</tr>
</table>	

</body>

</html>