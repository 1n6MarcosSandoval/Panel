<?php
	include_once 'functions.php';
	include_once 'vars.php';
	//include 'cec.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);
	
	
	$sqlBus = "Select NOMBRE from CENACOM.SESS where ACT=1";
	$stid = oci_parse($conOracle,$sqlBus);
	if (!$stid) 
		{
			$e = oci_error($conOracle);
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
		$r = oci_execute($stid);
		if (!$r) 
		{
			$e = oci_error($stid);
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		}
	
	$ArrayUsers = [];
	//array_push ($ArrayUsers,$contador);
			echo "Listado de usuarios activos:<br/>";
	while ($NomUsers = oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS))
	{
		foreach ($NomUsers as $valor)
			{
			
				echo "<br/>*".$valor;
			}
	}

?>