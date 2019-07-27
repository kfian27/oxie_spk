Highcharts.chart('Agama dan Moral', {

    title: {
        text: 'Solar Employment Growth by Sector, 2010-2016'
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com'
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Rendah',
        data: [[0,1],[0,1],[1,1],[2,0]]
    }, {
        name: 'Sedang',
        data: [[1,0],[2,1],[2,1],[3,0]]
    }, {
        name: 'Tinggi',
        data: [[2,0],[3,1],[3,1],[3.5,0]]
    }, {
        name: 'Sangat Tinggi',
        data: [[3,0],[3.5,1],[3.5,1],[4,1]]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});