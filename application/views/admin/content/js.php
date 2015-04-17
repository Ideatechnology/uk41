 var chart;

            var chartData = [
                {
                    "country": "Januari",
                    "visits": 4025,
                    "color": "#FF0F00"
                },
                {
                    "country": "Febuari",
                    "visits": 1882,
                    "color": "#FF6600"
                },
                {
                    "country": "Maret",
                    "visits": 1809,
                    "color": "#FF9E01"
                },
                {
                    "country": "April",
                    "visits": 1322,
                    "color": "#FCD202"
                },
                {
                    "country": "Mei",
                    "visits": 1122,
                    "color": "#F8FF01"
                },
                {
                    "country": "Juni",
                    "visits": 1114,
                    "color": "#B0DE09"
                },
                {
                    "country": "Juli",
                    "visits": 984,
                    "color": "#04D215"
                },
                {
                    "country": "Agustus",
                    "visits": 711,
                    "color": "#0D8ECF"
                },
                {
                    "country": "September",
                    "visits": 665,
                    "color": "#0D52D1"
                },
                {
                    "country": "Oktober",
                    "visits": 580,
                    "color": "#2A0CD0"
                },
                {
                    "country": "November",
                    "visits": 443,
                    "color": "#8A0CCF"
                },
                {
                    "country": "Desember",
                    "visits": 441,
                    "color": "#CD0D74"
                },
                
            ];


            AmCharts.ready(function () {
                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "country";
                // the following two lines makes chart 3D
                chart.depth2D = 20;
                chart.angle = 30;

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.labelRotation = 90;
                categoryAxis.dashLength = 5;
                categoryAxis.gridPosition = "start";

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.title = "Member";
                valueAxis.dashLength = 5;
                chart.addValueAxis(valueAxis);

                // GRAPH
                var graph = new AmCharts.AmGraph();
                graph.valueField = "visits";
                graph.colorField = "color";
                graph.balloonText = "<span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>";
                graph.type = "column";
                graph.lineAlpha = 0;
                graph.fillAlphas = 1;
                chart.addGraph(graph);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chartCursor.cursorAlpha = 0;
                chartCursor.zoomable = false;
                chartCursor.categoryBalloonEnabled = false;
                chart.addChartCursor(chartCursor);

                chart.creditsPosition = "top-right";


                // WRITE
                chart.write("chartdiv");
            });