<?php
	include_once 'functions.php';
	include_once 'vars.php';
	//include 'cec.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);

	//Listado Usuarios
		$queryNum = oci_parse ($conOracle,"SELECT COUNT (Usuario) AS VALOR FROM CENACOM.ADMINISTRADORES");
		oci_execute($queryNum);
		$row_NumUs = oci_fetch_array($queryNum, OCI_ASSOC);
		$NumUso = $row_NumUs["VALOR"];
		$NumUso = $NumUso;
		//echo $NumUso;
		
		for($contador = 0;$contador<=$NumUso;$contador++)
		{
		
			$sqlBus = "Select NOMBRE_REP from CENACOM.ADMINISTRADORES";
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
	
			$ArrayUsers = [$contador];
			array_push ($ArrayUsers,$contador);
			
			//echo "Listado de usuarios:<br/>";
			while ($NomUsers = oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS))
			{
				foreach ($NomUsers as $valor)
				{
					//echo "<br/>".$valor;
				}
				//print_r ($NomUsers);
			$PersonalArray = array_combine ($ArrayUsers,$NomUsers);
			}
			print_r ($PersonalArray);
		}	
			
/*		

	//Fin Listado de Usuarios
	//Count for Geo
		$queryGeo = oci_parse ($conOracle, "SELECT COUNT (CLASIFICACIONFENOMENO_ID) AS VALOR FROM CENACOM.REPORTES WHERE CLASIFICACIONFENOMENO_ID = 'GEO'");
		oci_execute($queryGeo);
		$row_fenomeno_Geo = oci_fetch_array($queryGeo, OCI_ASSOC);
		$Geo = $row_fenomeno_Geo["VALOR"];
		$datoG = $Geo;
	//End Count for Geo
*/	
	
	cerrarConexionORACLE($conOracle);
?>

<!--
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />


<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>	
	
    <script type="text/javascript">
	
	
		var geologico = <?php //echo $datoG ?>;
	//console.log(geologico)
	
	
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "none",
    "dataProvider": [{
        "Usuario": "Geológico",
        "Reportes": geologico,
        "color": "#800000"
    }, {
        "country": "Hidrometeorologíco",
        "visits": hidrometeorologico,
        "color": "#800000"
    }, {
        "country": "Químico–Tecnológico",
        "visits": quimico,
        "color": "#800000"
    }, {
        "country": "Sanitario–Ecológico",
        "visits": sanitario,
        "color": "#800000"
    }, {
        "country": "Socio–Organizativo",
        "visits": socio,
        "color": "#800000"
    }],
    "valueAxes": [{
        "axisAlpha": 0,
        "position": "left",
        "title": "Reportes por tipo de fenómeno"
    }],
    "startDuration": 1,
    "graphs": [{
        "balloonText": "<b>[[category]]: [[value]]</b>",
        "colorField": "color",
        "fillAlphas": 0.9,
        "lineAlpha": 0.2,
        "type": "column",
        "valueField": "visits"
    }],
    "chartCursor": {
        "categoryBalloonEnabled": false,
        "cursorAlpha": 50,
        "zoomable": false
    },
    "categoryField": "country",
	//Etiquetas sobre X
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 90
    },
    "amExport":{}
     
});
	
	
    </script>
  </head>
  <body>


<div id="chartdiv" style= "width:100%; 	height:300px; font-size:11px;"></div>			
  </body>
</html>
-->
