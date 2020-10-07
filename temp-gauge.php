<?php
    include_once "connect.php";
    $sql = "SELECT temp_value FROM basin_sensor ORDER BY senser_id DESC LIMIT 1";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $temp = $row['temp_value'];
    
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div id="container-temp" class="chart-container" style="height: 300px;"></div>
<p class="highcharts-description">
</p>
<script language="JavaScript">
 var gaugeOptions = {
    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '70%'],
        size: '100%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: '#ddd',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    exporting: {
        enabled: false
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.5, '#55BF3B'], // green
            [0.65, '#DDDF0D'], // yellow
            [0.7, '#DF5353'] // red
        ],
        lineWidth: 0,
        tickWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: 20  // title "temparature" position
        },
        labels: {
            y: 16  // 0-100 position
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: -50, // value position
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-temp', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 60,
        title: {
            text: 'Temperature'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Temperature',
        data: [<?php echo $temp?>],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">°C</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: '°C'
        }
    }]

}));

// Bring life to the dials 
/*setInterval(function () {
    // Speed
    var point,
        newVal,
        inc;

    if (chartSpeed) {
        point = chartSpeed.series[0].points[0];
        inc = Math.round((Math.random() - 0.5) * 100);
        newVal = point.y + inc;

        if (newVal < 0 || newVal > 100) {
            newVal = point.y - inc;
        }

        point.update(newVal);
    }
    
}, 2000); */

console.log(chartSpeed);
</script>
