<!DOCTYPE html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />-->

	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/dojo/1.8/dijit/themes/claro/claro.css">
	<script src="//ajax.googleapis.com/ajax/libs/dojo/1.8.0/dojo/dojo.js" data-dojo-config='async: true, parseOnLoad: true'></script>
	<script>
		require(["dojo/parser", "dijit/form/DateTextBox"]);
	</script>

	<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
	<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>

	<script type="text/javascript">
var chartData = generateChartData();
var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "pathToImages": "http://www.amcharts.com/lib/3/images/",
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left"
    }],
    "mouseWheelZoomEnabled":true,
    "graphs": [{
        "id":"g1",
        "balloonText": "[[category]]<br /><b><span style='font-size:14px;'>value: [[value]]</span></b>",
        "bullet": "round",
		"fillColors": "#CC0000",
		"id": "AmGraph-1",
		"lineColor": "#CC0000",
		"lineThickness": 2,
        "bulletBorderAlpha": 1,
		"bulletColor":"#FFFFFF",
        "hideBulletsCount": 50,
        "title": "red line",
        "valueField": "visits",
		"useLineColorForBulletBorder":true
    }],
    "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {
        "cursorPosition": "mouse"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
	"exportConfig":{
	  menuRight: '20px',
      menuBottom: '30px',
      menuItems: [{
      icon: 'http://www.amcharts.com/lib/3/images/export.png',
      format: 'png'	  
      }]  
	}
});

chart.addListener("rendered", zoomChart);
zoomChart();

// this method is called when chart is first inited as we listen for "dataUpdated" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
}


// generate some random data, quite different range
function generateChartData() {
    var chartData = [];
    var firstDate = new Date();
    firstDate.setDate(firstDate.getDate() - 5);

    for (var i = 0; i < 1000; i++) {
        // we create date objects here. In your data, you can have date strings
        // and then set format of your dates using chart.dataDateFormat property,
        // however when possible, use date objects, as this will speed up chart rendering.
        var newDate = new Date(firstDate);
        newDate.setDate(newDate.getDate() + i);

        var visits = Math.round(Math.random() * (40 + i / 5)) + 20 + i;

        chartData.push({
            date: newDate,
            visits: visits
        });
    }
    return chartData;
}	
	</script>
	
</head>

	<body class="claro">
		<!--Calendario-->
		<label for="fromDate">Desde:</label>
		<input data-dojo-id="myFromDate" type="text" name="fromDate" data-dojo-type="dijit/form/DateTextBox" required="true" onChange="myToDate.constraints.min = arguments[0];" />  
		<label for="toDate">  al: </label>
		<input data-dojo-id="myToDate" type="text" name="toDate" data-dojo-type="dijit/form/DateTextBox" required="true" onChange="myFromDate.constraints.max = arguments[0];" />
		<br/>
		<!--Grafica-->
		<div id="chartdiv" style= "width:100%; 	height:500px; font-size:11px;"></div>	
		
	</body>
</html>