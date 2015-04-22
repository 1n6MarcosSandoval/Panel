<?php
	include_once 'functions.php';
	include_once 'vars.php';
	//include 'cec.php';
	//include 'menu.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);

	//Count for Alto
		$queryA = oci_parse ($conOracle, "SELECT COUNT (NIVEL) AS VALOR FROM CENACOM.REPORTES WHERE NIVEL = 1 OR NIVEL = 0");
		oci_execute($queryA);
		$row_fenomeno_A = oci_fetch_array($queryA, OCI_ASSOC);
		$Alto = $row_fenomeno_A["VALOR"];
		$datoA = $Alto;
	//End Count for Alto
	
	//Count for Medio
		$queryM = oci_parse ($conOracle, "SELECT COUNT (NIVEL) AS VALOR FROM CENACOM.REPORTES WHERE NIVEL = 2");
		oci_execute($queryM);
		$row_fenomeno_M = oci_fetch_array($queryM, OCI_ASSOC);
		$Medio = $row_fenomeno_M["VALOR"];		
		$datoM = $Medio;
	//End Count for Medio
	
	//Count for Bajo
		$queryB = oci_parse ($conOracle, "SELECT COUNT (NIVEL) AS VALOR FROM CENACOM.REPORTES WHERE NIVEL = 3");
		oci_execute($queryB);
		$row_fenomeno_B = oci_fetch_array($queryB, OCI_ASSOC);
		$Bajo = $row_fenomeno_B["VALOR"];			
		$datoB = $Bajo;
	//End Count for Bajo
	

	cerrarConexionORACLE($conOracle);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->

<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/pie.js"></script>

	<script>setTimeout('document.location.reload()',10000); </script>
	<script type="text/javascript">
	
	var Alto = <?php echo $datoA ?>;
	var Medio = <?php echo $datoM ?>;
	var Bajo = <?php echo $datoB ?>;

	
var chart = AmCharts.makeChart("chartdiv", {
    "type": "pie",
	
	"pathToImages": "http://cdn.amcharts.com/lib/3/images/",
					"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
					"colors": [
						"#800000",
						"#EEC900",
						"#006400"
					],
					"titleField": "Nivel",
					"valueField": "report",
					"fontSize": 12,
					"theme": "default",
					"allLabels": [],
					"balloon": {},
					"titles": [],
	
    "dataProvider": [{
        "Nivel": "Alto",
        "report": Alto,

    }, {
        "Nivel": "Medio",
        "report": Medio,

    }, {
        "Nivel": "Bajo",
        "report": Bajo,

    }],

    
     
});
	
	
    </script>
  </head>
  <body>


<div id="chartdiv" style= "width:100%; 	height:300px; font-size:11px;"></div>			
  </body>
</html>
