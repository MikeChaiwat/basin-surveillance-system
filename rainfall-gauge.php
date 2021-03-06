<?php
    include_once "connect.php";
    $sql = "SELECT rainfall_value FROM basin_sensor ORDER BY senser_id DESC LIMIT 1";
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
    $rainfall = $row['rainfall_value'];
    
?>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<div id="container-rainfall" class="chart-container" style="height: 300px;"></div>
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
            [0.1, '#55BF3B'], // green
            [0.3, '#DDDF0D'], // yellow
            [0.5, '#DF5353'] // red
        ],
        lineWidth: 0,
        tickWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: 20  // title "humid" position
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
var chartSpeed = Highcharts.chart('container-rainfall', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 200,
        title: {
            text: 'Rainfall'
        }
    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'Rainfall',
        data: [90],
        dataLabels: {
            format:
                '<div style="text-align:center">' +
                '<span style="font-size:25px">{y}</span><br/>' +
                '<span style="font-size:12px;opacity:0.4">mm/h</span>' +
                '</div>'
        },
        tooltip: {
            valueSuffix: 'mm/h'
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

</script>
