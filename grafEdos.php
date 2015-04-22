<?php
	include_once 'functions.php';
	include_once 'vars.php';
	//include 'cec.php';
	//include 'menu.php';
	
	$conOracle=conexionORACLE($HOST, $PORT, $SID, $userName, $passkey);

	//Count for Edo Aguascalientes
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 1 AND NIVEL=0 OR ENTIDADES=1 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$AguA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 1 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$AguM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 1 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$AguB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************
	//Count for Edo BC
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 2 AND NIVEL=0 OR ENTIDADES=2 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$BCA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 2 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$BCM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 2 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$BCB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo BCS
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 3 AND NIVEL=0 OR ENTIDADES=3 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$BCSA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 3 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$BCSM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 3 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$BCSB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Campeche
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 4 AND NIVEL=0 OR ENTIDADES=4 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$CamA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 4 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$CamM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 4 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$CamB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Coahuila
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 5 AND NIVEL=0 OR ENTIDADES=5 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$CoaA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 5 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$CoaM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 5 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$CoaB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Colima
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 6 AND NIVEL=0 OR ENTIDADES=6 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ColA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 6 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ColM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 6 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ColB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Chiapas
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 7 AND NIVEL=0 OR ENTIDADES=7 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ChiA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 7 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ChiM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 7 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ChiB = $x;
		//***
	//End Count for Edo

//********************************************************************************************************************	//Count for Edo Chihuahua
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 8 AND NIVEL=0 OR ENTIDADES=8 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ChihA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 8 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ChihM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 8 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ChihB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo DF
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 9 AND NIVEL=0 OR ENTIDADES=9 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$DFA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 9 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$DFM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 9 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$DFB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Durango
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 10 AND NIVEL=0 OR ENTIDADES=10 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$DurA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 10 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$DurM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 10 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$DurB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Guanajuato
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 11 AND NIVEL=0 OR ENTIDADES=11 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$GuaA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 11 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$GuaM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 11 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$GuaB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Guerrero
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 12 AND NIVEL=0 OR ENTIDADES=12 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$GueA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 12 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$GueM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 12 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$GueB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Hidalgo
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 13 AND NIVEL=0 OR ENTIDADES=13 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$HidA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 13 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$HidM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 13 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$HidB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Jalisco
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 14 AND NIVEL=0 OR ENTIDADES=14 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$JalA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 14 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$JalM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 14 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$JalB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Edo Mex
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 15 AND NIVEL=0 OR ENTIDADES=15 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MexA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 15 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MexM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 15 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MexB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Michoacan
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 16 AND NIVEL=0 OR ENTIDADES=16 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MicA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 16 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MicM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 16 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MicB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Morelos
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 17 AND NIVEL=0 OR ENTIDADES=17 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MorA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 17 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MorM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 17 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$MorB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Nayarit
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 18 AND NIVEL=0 OR ENTIDADES=18 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$NayA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 18 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$NayM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 18 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$NayB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Nuevo Leon
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 19 AND NIVEL=0 OR ENTIDADES=19 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$NLA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 19 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$NLM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 19 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$NLB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Oaxaca
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 20 AND NIVEL=0 OR ENTIDADES=20 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$OaxA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 20 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$OaxM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 20 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$OaxB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Puebla
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 21 AND NIVEL=0 OR ENTIDADES=21 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$PueA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 21 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$PueM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 21 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$PueB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Queretaro
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 22 AND NIVEL=0 OR ENTIDADES=22 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$QueA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 22 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$QueM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 22 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$QueB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Quinta Roo
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 23 AND NIVEL=0 OR ENTIDADES=23 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$QRA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 23 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$QRM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 23 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$QRB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo San Luis Potosi
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 24 AND NIVEL=0 OR ENTIDADES=24 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SLPA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 24 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SLPM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 1 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SLPB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Sinaloa
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 25 AND NIVEL=0 OR ENTIDADES=25 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SinA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 25 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SinM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 25 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SinB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Sonora
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 26 AND NIVEL=0 OR ENTIDADES=26 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SonA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 26 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SonM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 26 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$SonB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Tabasco
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 27 AND NIVEL=0 OR ENTIDADES=27 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TabA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 27 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TabM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 27 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TabB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Tamaulipas
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 28 AND NIVEL=0 OR ENTIDADES=28 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TamA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 28 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TamM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 28 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TamB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Tlaxcala
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 29 AND NIVEL=0 OR ENTIDADES=29 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TlaA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 29 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TlaM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 29 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$TlaB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Veracruz
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 30 AND NIVEL=0 OR ENTIDADES=30 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$VerA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 30 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$VerM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 30 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$VerB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Yucatan
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 31 AND NIVEL=0 OR ENTIDADES=31 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$YucA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 31 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$YucM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 31 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$YucB = $x;
		//***
	//End Count for Edo
//********************************************************************************************************************	//Count for Edo Zacatecas
		//Alto
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 32 AND NIVEL=0 OR ENTIDADES=32 AND NIVEL=1");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ZacA = $x;
		//***
		//Medio
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 32 AND NIVEL=2");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ZacM = $x;
		//***
		//Bajo
		$query = oci_parse ($conOracle, "SELECT COUNT (ENTIDADES) AS VALOR FROM CENACOM.GEOR WHERE ENTIDADES = 32 AND NIVEL=3");
		oci_execute($query);
		$row_ENTIDADES = oci_fetch_array($query, OCI_ASSOC);
		$x = $row_ENTIDADES["VALOR"];
		$ZacB = $x;
		//***
	//End Count for Edo
//*******************************************************************************************************************
	
	cerrarConexionORACLE($conOracle);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->


	
<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>
	
	<script>setTimeout('document.location.reload()',14000); </script>
    <script type="text/javascript">
	
	
	var AguA  = <?php echo $AguA  ?>;
	var AguM  = <?php echo $AguM  ?>;
	var AguB  = <?php echo $AguB  ?>;
	//**********************************
	var BCA  = <?php echo $BCA  ?>;
	var BCM  = <?php echo $BCM  ?>;
	var BCB  = <?php echo $BCB  ?>;
	//**********************************
	var BCSA  = <?php echo $BCSA  ?>;
	var BCSM  = <?php echo $BCSM  ?>;
	var BCSB  = <?php echo $BCSB  ?>;
	//**********************************	
	var CamA  = <?php echo $CamA  ?>;
	var CamM  = <?php echo $CamM  ?>;
	var CamB  = <?php echo $CamB  ?>;
	//**********************************
	var CoaA  = <?php echo $CoaA  ?>;
	var CoaM  = <?php echo $CoaM  ?>;
	var CoaB  = <?php echo $CoaB  ?>;
	//**********************************
	var ColA  = <?php echo $ColA  ?>;
	var ColM  = <?php echo $ColM  ?>;
	var ColB  = <?php echo $ColB  ?>;
	//**********************************
	var ChiA  = <?php echo $ChiA  ?>;
	var ChiM  = <?php echo $ChiM  ?>;
	var ChiB  = <?php echo $ChiB  ?>;
	//**********************************
	var ChihA  = <?php echo $ChihA  ?>;
	var ChihM  = <?php echo $ChihM  ?>;
	var ChihB  = <?php echo $ChihB  ?>;
	//**********************************
	var DFA  = <?php echo $DFM  ?>;
	var DFM  = <?php echo $DFM  ?>;
	var DFB  = <?php echo $DFB  ?>;
	//**********************************
	var DurA  = <?php echo $DurA  ?>;
	var DurM  = <?php echo $DurM  ?>;
	var DurB  = <?php echo $DurB  ?>;
	//**********************************
	var GuaA  = <?php echo $GuaA  ?>;
	var GuaM  = <?php echo $GuaM  ?>;
	var GuaB  = <?php echo $GuaB  ?>;
	//**********************************
	var GueA  = <?php echo $GueA  ?>;
	var GueM  = <?php echo $GueM  ?>;
	var GueB  = <?php echo $GueB  ?>;
	//**********************************
	var HidA  = <?php echo $HidA  ?>;
	var HidM  = <?php echo $HidM  ?>;
	var HidB  = <?php echo $HidB  ?>;
	//**********************************
	var JalA  = <?php echo $JalA  ?>;
	var JalM  = <?php echo $JalM  ?>;
	var JalB  = <?php echo $JalB  ?>;
	//**********************************
	var MexA  = <?php echo $MexA  ?>;
	var MexM  = <?php echo $MexM  ?>;
	var MexB  = <?php echo $MexB  ?>;
	//**********************************
	var MicA  = <?php echo $MicA  ?>;
	var MicM  = <?php echo $MicM  ?>;
	var MicB  = <?php echo $MicB  ?>;
	//**********************************
	var MorA  = <?php echo $MorA  ?>;
	var MorM  = <?php echo $MorM  ?>;
	var MorB  = <?php echo $MorB  ?>;
	//**********************************
	var NayA  = <?php echo $NayA  ?>;
	var NayM  = <?php echo $NayM  ?>;
	var NayB  = <?php echo $NayB  ?>;
	//**********************************
	var NLA  = <?php echo $NLA  ?>;
	var NLM  = <?php echo $NLM  ?>;
	var NLB  = <?php echo $NLB  ?>;
	//**********************************
	var OaxA  = <?php echo $OaxA  ?>;
	var OaxM  = <?php echo $OaxM  ?>;
	var OaxB  = <?php echo $OaxB  ?>;
	//**********************************
	var PueA  = <?php echo $PueA  ?>;
	var PueM  = <?php echo $PueM  ?>;
	var PueB  = <?php echo $PueB  ?>;
	//**********************************
	var QueA  = <?php echo $QueA  ?>;
	var QueM  = <?php echo $QueM  ?>;
	var QueB  = <?php echo $QueB  ?>;
	//**********************************
	var QRA  = <?php echo $QRA  ?>;
	var QRM  = <?php echo $QRM  ?>;
	var QRB  = <?php echo $QRB  ?>;
	//**********************************
	var SLPA  = <?php echo $SLPA  ?>;
	var SLPM  = <?php echo $SLPM  ?>;
	var SLPB  = <?php echo $SLPB  ?>;
	//**********************************
	var SinA  = <?php echo $SinA  ?>;
	var SinM  = <?php echo $SinM  ?>;
	var SinB  = <?php echo $SinB  ?>;
	//**********************************
	var SonA  = <?php echo $SonA  ?>;
	var SonM  = <?php echo $SonM  ?>;
	var SonB  = <?php echo $SonB  ?>;
	//**********************************
	var TabA  = <?php echo $TabA  ?>;
	var TabM  = <?php echo $TabM  ?>;
	var TabB  = <?php echo $TabB  ?>;
	//**********************************
	var TamA  = <?php echo $TamA  ?>;
	var TamM  = <?php echo $TamM  ?>;
	var TamB  = <?php echo $TamB  ?>;
	//**********************************
	var TlaA  = <?php echo $TlaA  ?>;
	var TlaM  = <?php echo $TlaM  ?>;
	var TlaB  = <?php echo $TlaB  ?>;
	//**********************************
	var VerA  = <?php echo $VerA  ?>;
	var VerM  = <?php echo $VerM  ?>;
	var VerB  = <?php echo $VerB  ?>;
	//**********************************
	var YucA  = <?php echo $YucA  ?>;
	var YucM  = <?php echo $YucM  ?>;
	var YucB  = <?php echo $YucB  ?>;
	//**********************************
	var ZacA  = <?php echo $ZacA  ?>;
	var ZacM  = <?php echo $ZacM  ?>;
	var ZacB  = <?php echo $ZacB  ?>;
	//**********************************

	
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",

					"categoryField": "Estado",
					"startDuration": 3,
					//"rotate": true,
					"categoryAxis": {
						"gridPosition": "start",
						"labelRotation":90
					},
					"trendLines": [],
					"graphs": [
						{
							"balloonColor": "#800000",
							"balloonText": "Afectacion nivel [[title]] para [[category]]:[[value]]",
							"fillAlphas": 1,
							"fillColors": "#800000",
							"id": "Alto",
							"title": "alto",
							"type": "column",
							"valueField": "Alto"
						},
						{
							"balloonColor": "#EEC900",
							"balloonText": "Afectacion nivel [[title]] para [[category]]:[[value]]",
							"fillAlphas": 1,
							"fillColors": "#EEC900",
							"id": "Medio",
							"title": "medio",
							"type": "column",
							"valueField": "Medio"
						},
						{
							"balloonColor": "#006400",
							"balloonText": "Afectacion nivel [[title]] para [[category]]:[[value]]",
							"fillAlphas": 1,
							"fillColors": "#006400",
							"id": "Bajo",
							"title": "bajo",
							"type": "column",
							"valueField": "Bajo"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "Estado",
							"stackType": "regular",
							"title": "Estado"
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "Grafica",
							"size": 15,
							"text": ""
						}
					],
	
    "dataProvider": [{
	
        "Estado": "Aguascalientes",
        "Alto": AguA,
        "Medio": AguM,
        "Bajo": AguB,
        
    }, {
        "Estado": "Baja California",
        "Alto": BCA,
        "Medio": BCM,
        "Bajo": BCB,
 
    }, {
        "Estado": "Baja California Sur",
        "Alto": BCSA,
        "Medio": BCSM,
        "Bajo": BCSB,

    }, {
    	"Estado": "Campeche",
        "Alto": CamA,
        "Medio": CamM,
        "Bajo": CamB,
	
	}, {
		"Estado": "Coahuila de Zaragoza",
        "Alto": CoaA,
        "Medio": CoaM,
        "Bajo": CoaB,

    }, {
        "Estado": "Colima",
        "Alto": ColA,
        "Medio": ColM,
        "Bajo": ColB,

    }, {
        "Estado": "Chiapas",
        "Alto": ChiA,
        "Medio": ChiM,
        "Bajo": ChiB,

    }, {
        "Estado": "Chihuahua",
        "Alto": ChihA,
        "Medio": ChihM,
        "Bajo": ChihB,

    }, {
        "Estado": "Distrito Federal",
        "Alto": DFA,
        "Medio": DFM,
        "Bajo": DFB,

    }, {
        "Estado": "Durango",
        "Alto": DurA,
        "Medio": DurM,
        "Bajo": DurB,

    }, {
        "Estado": "Guanajuato",
        "Alto": GuaA,
        "Medio": GuaM,
        "Bajo": GuaB,

    }, {
        "Estado": "Guerrero",
        "Alto": GueA,
        "Medio": GueM,
        "Bajo": GueB,

    }, {
        "Estado": "Hidalgo",
        "Alto": HidA,
        "Medio": HidM,
        "Bajo": HidB,	
	
	}, {
        "Estado": "Jalisco",
        "Alto": JalA,
        "Medio": JalM,
        "Bajo": JalB,

    }, {
        "Estado": "México",
        "Alto": MexA,
        "Medio": MexM,
        "Bajo": MexB,

    }, {
        "Estado": "Michoacán de Ocampo",
        "Alto": MicA,
        "Medio": MicM,
        "Bajo": MicB,

    }, {
        "Estado": "Morelos",
        "Alto": MorA,
        "Medio": MorM,
        "Bajo": MorB,

    }, {
        "Estado": "Nayarit",
        "Alto": NayA,
        "Medio": NayM,
        "Bajo": NayB,

    }, {
        "Estado": "Nuevo León",
        "Alto": NLA,
        "Medio": NLM,
        "Bajo": NLB,

    }, {
        "Estado": "Oaxaca",
        "Alto": OaxA,
        "Medio": OaxM,
        "Bajo": OaxB,

    }, {
        "Estado": "Puebla",
        "Alto": PueA,
        "Medio": PueM,
        "Bajo": PueB,

    }, {
        "Estado": "Querétaro",
        "Alto": QueA,
        "Medio": QueM,
        "Bajo": QueB,

    }, {
        "Estado": "Quintana Roo",
        "Alto": QRA,
        "Medio": QRM,
        "Bajo": QRB,

    }, {
        "Estado": "San Luis Potosí",
        "Alto": SLPA,
        "Medio": SLPM,
        "Bajo": SLPB,

    }, {
        "Estado": "Sinaloa",
        "Alto": SinA,
        "Medio": SinM,
        "Bajo": SinB,

    }, {
        "Estado": "Sonora",
        "Alto": SonA,
        "Medio": SonM,
        "Bajo": SonB,

    }, {
        "Estado": "Tabasco",
        "Alto": TabA,
        "Medio": TabM,
        "Bajo": TabB,

    }, {
        "Estado": "Tamaulipas",
        "Alto": TamA,
        "Medio": TamM,
        "Bajo": TamB,

    }, {
        "Estado": "Tlaxcala",
        "Alto": TlaA,
        "Medio": TlaM,
        "Bajo": TlaB,

    }, {
        "Estado": "Veracruz de Ignacio de la Llave",
        "Alto": VerA,
        "Medio": VerM,
        "Bajo": VerB,

    }, {
        "Estado": "Yucatán",
        "Alto": YucA,
        "Medio": YucM,
        "Bajo": YucB,

    }, {
        "Estado": "Zacatecas",
        "Alto": ZacA,
        "Medio": ZacM,
        "Bajo": ZacB,
	}],
});
	
	
    </script>
  </head>
  <body>


<div id="chartdiv" style= "width:100%; 	height:700px; font-size:11px;"></div>			
  </body>
</html>
