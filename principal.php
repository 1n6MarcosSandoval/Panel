<?php
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

	
<table width='100%'  height='100%' border = 10 bordercolor="#0E6F1B" >
	<tr>
		<!--Mapa-->
		<td colspan="2" width='100%' height='500px' ALIGN=CENTER>
			<iframe width='98%' height='98%' src='/dcenacom/mapa.php' frameborder='0' scrolling='no'></iframe>
		</td>
	</tr>
	
	<!--Nivel de Afecatción-->
	<tr>
		<td>
			<iframe width='100%'  height='350px' src='/panel/grafAfecP.php' frameborder='0' scrolling='No'></iframe>
		</td>

		<td width='50%' height='350px'>
			<iframe width='100%' height='100%' src='/panel/grafAfecS.php' frameborder='0' scrolling='No'></iframe>
		</td>
	</tr>

	<!--Tipo de Fenómeno-->
	<tr>
		<td>
			<iframe width='100%'  height='350px' src='/panel/grafFenP.php' frameborder='0' scrolling='No'></iframe>
		</td>

		<td width='50%' height='300px'>
			<iframe width='100%' height='100%' src='/panel/grafFen.php' frameborder='0' scrolling='No'></iframe>
		</td>
	</tr>	
	
		<!--Estados-->
	<tr>
		<td height='800px' colspan="2">
			<iframe width='100%' height='100%' src='/panel/grafEdos.php' frameborder='0' scrolling='No'></iframe>
		</td>
	</tr>
	
	<!--Sesiones-->
	<tr>
		<!--Sesiones Activas-->
		<td>
			<iframe width='100%'  height='100%' src='/panel/sesi.php' frameborder='0' scrolling='yes'></iframe>
		</td>

		<td width='50%' height='300px'>

		</td>
	</tr>
	
	<!--En Proceso
	<tr>
		<td colspan="2" width='100%' height='500px' ALIGN=CENTER>
			algo
		</td>
	</tr>-->

</table>

</body>

</html>
