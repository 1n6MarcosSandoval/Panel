<?php
	include_once 'functions.php';
	include_once 'vars.php';
	//include 'cec.php';
	//include 'menu.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);

	//Count for Geo
		$queryGeo = oci_parse ($conOracle, "SELECT COUNT (CLASIFICACIONFENOMENO_ID) AS VALOR FROM CENACOM.REPORTES WHERE CLASIFICACIONFENOMENO_ID = 'GEO'");
		oci_execute($queryGeo);
		$row_fenomeno_Geo = oci_fetch_array($queryGeo, OCI_ASSOC);
		$Geo = $row_fenomeno_Geo["VALOR"];
		$datoG = $Geo;
	//End Count for Geo
	
	//Count for Hidro
		$queryHidro = oci_parse ($conOracle, "SELECT COUNT (CLASIFICACIONFENOMENO_ID) AS VALOR FROM CENACOM.REPORTES WHERE CLASIFICACIONFENOMENO_ID = 'HIDRO'");
		oci_execute($queryHidro);
		$row_fenomeno_Hidro = oci_fetch_array($queryHidro, OCI_ASSOC);
		$Hidro = $row_fenomeno_Hidro["VALOR"];		
		$datoH = $Hidro;
	//End Count for Hidro
	
	//Count for Quim
		$queryQuim = oci_parse ($conOracle, "SELECT COUNT (CLASIFICACIONFENOMENO_ID) AS VALOR FROM CENACOM.REPORTES WHERE CLASIFICACIONFENOMENO_ID = 'QUIM'");
		oci_execute($queryQuim);
		$row_fenomeno_Quim = oci_fetch_array($queryQuim, OCI_ASSOC);
		$Quim = $row_fenomeno_Quim["VALOR"];			
		$datoQ = $Quim;
	//End Count for Quim
	
	//Count for San
		$querySan = oci_parse ($conOracle, "SELECT COUNT (CLASIFICACIONFENOMENO_ID) AS VALOR FROM CENACOM.REPORTES WHERE CLASIFICACIONFENOMENO_ID = 'SAN'");
		oci_execute($querySan);
		$row_fenomeno_San = oci_fetch_array($querySan, OCI_ASSOC);
		$San = $row_fenomeno_San["VALOR"];		
		$datoSan = $San;
	//End Count for San
	
	//Count for Soc
		$querySoc = oci_parse ($conOracle, "SELECT COUNT (CLASIFICACIONFENOMENO_ID) AS VALOR FROM CENACOM.REPORTES WHERE CLASIFICACIONFENOMENO_ID = 'SOCIO'");
		oci_execute($querySoc);
		$row_fenomeno_Soc = oci_fetch_array($querySoc, OCI_ASSOC);
		$Soc = $row_fenomeno_Soc["VALOR"];		
		$datoSoc = $Soc;
	//End Count for Soc
	cerrarConexionORACLE($conOracle);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->

<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/none.js"></script>	
	
    <script>setTimeout('document.location.reload()',13000); </script>
	<script type="text/javascript">
	
	
		var geologico = <?php echo $datoG ?>;
	//console.log(geologico)
	var hidrometeorologico = <?php echo $datoH ?>;
	var quimico = <?php echo $datoQ ?>;
	var sanitario = <?php echo $datoSan ?>;
	var socio = <?php echo $datoSoc ?>;
	
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "none",
    "dataProvider": [{
        "Fenómeno": "Geológico",
        "Tipo": geologico,
        "color": "#5F4C0B"
    }, {
        "Fenómeno": "Hidrometeorologíco",
        "Tipo": hidrometeorologico,
        "color": "#0B0B61"
    }, {
        "Fenómeno": "Químico–Tecnológico",
        "Tipo": quimico,
        "color": "#DF7401"
    }, {
        "Fenómeno": "Sanitario–Ecológico",
        "Tipo": sanitario,
        "color": "#0B6121"
    }, {
        "Fenómeno": "Socio–Organizativo",
        "Tipo": socio,
        "color": "#A4A4A4"
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
        "fillAlphas": 1,
        "lineAlpha": 1,
        "type": "column",
        "valueField": "Tipo"
    }],
    "chartCursor": {
        "categoryBalloonEnabled": true,
        "cursorAlpha": 1000,
        "zoomable": true
    },
    "categoryField": "Fenómeno",
	//Etiquetas sobre X
    "categoryAxis": {
        "gridPosition": "start",
        "labelRotation": 45
    },
    "amExport":{}
     
});
	
	
    </script>
  </head>
  <body>


<div id="chartdiv" style= "width:100%; 	height:300px; font-size:11px;"></div>			
  </body>
</html>
