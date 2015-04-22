<!DOCTYPE html>
<html>
	<head>
		<title>chart created with amCharts | amCharts</title>
		<meta name="description" content="chart created using amCharts live editor" />

		<!-- amCharts javascript sources -->
	<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
	<script type="text/javascript" src="http://www.amcharts.com/lib/3/serial.js"></script>

		<!-- amCharts javascript code -->
		<script type="text/javascript">
			AmCharts.makeChart("chartdiv",
				{
					"type": "serial",
					"pathToImages": "http://cdn.amcharts.com/lib/3/images/",
					"categoryField": "date",
					"dataDateFormat": "YYYY-MM",
					"theme": "default",
					"categoryAxis": {
						"minPeriod": "MM",
						"parseDates": true
					},
					"chartCursor": {
						"categoryBalloonDateFormat": "MMM YYYY"
					},
					"chartScrollbar": {},
					"trendLines": [],
					"graphs": [
						{
							"bullet": "round",
							"fillColors": "#CC0000",
							"id": "AmGraph-1",
							"lineColor": "#CC0000",
							"title": "graph 1",
							"valueField": "Reportes"
						}
					],
					"guides": [],
					"valueAxes": [
						{
							"id": "ValueAxis-1",
							"title": "Axis title"
						}
					],
					"allLabels": [],
					"balloon": {},
					"legend": {
						"useGraphSettings": true
					},
					"titles": [
						{
							"id": "Title-1",
							"size": 15,
							"text": "Chart Title"
						}
					],
					"dataProvider": [
						{
							"date": "2014-01",
							"Reportes": 8
						},
						{
							"date": "2014-02",
							"Reportes": 6
						},
						{
							"date": "2014-03",
							"Reportes": 2
						},
						{
							"date": "2014-04",
							"Reportes": 1
						},
						{
							"date": "2014-05",
							"Reportes": 2
						},
						{
							"date": "2014-06",
							"Reportes": 3
						},
						{
							"date": "2014-07",
							"Reportes": 6
						}
					]
				}
			);
		</script>
	</head>
	<body>
		<div id="chartdiv" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</body>
</html>