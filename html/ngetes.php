<?php
//NAM-------------------------------------------------------1
$x = 6.3;
echo"Nilai Agama dan Moral (NAM)     = ".$x."<br />";


//graph 1 (rendah)
$a = 0;
$b = 0;
$c = 3;
$d = 4;

if ($x <= $a || $x >= $d){
    $hasil = 0;
} elseif ($x >= $a && $x <= $b) {
    $hasil = ($x-$a)/($b-$a);
} elseif ($x >= $b && $x <= $c) {
    $hasil = 1;
} elseif ($x >= $c && $x <= $d) {
    $hasil = ($d-$x)/($d-$c);
}

//echo $hasil;
$bulat = number_format ($hasil,2);
$rendah = $bulat;
$nil[0] = $rendah;


//graph 2 (sedang)
$a = 3;
$b = 5;
$c = 5;
$d = 7;

if ($x <= $a || $x >= $d){
    $hasil = 0;
} elseif ($x >= $a && $x <= $b) {
    $hasil = ($x-$a)/($b-$a);
} elseif ($x >= $b && $x <= $c) {
    $hasil = 1;
} elseif ($x >= $c && $x <= $d) {
    $hasil = ($d-$x)/($d-$c);
}

//echo $hasil;
$bulat = number_format ($hasil,2);
$sedang = $bulat;
$nil[1] = $sedang;

//graph 3 (tinggi)
$a = 6;
$b = 7;
$c = 7;
$d = 8.5;

if ($x <= $a || $x >= $d){
    $hasil = 0;
} elseif ($x >= $a && $x <= $b) {
    $hasil = ($x-$a)/($b-$a);
} elseif ($x >= $b && $x <= $c) {
    $hasil = 1;
} elseif ($x >= $c && $x <= $d) {
    $hasil = ($d-$x)/($d-$c);
}

//echo $hasil;
$bulat = number_format ($hasil,2);
$tinggi = $bulat;
$nil[2] = $tinggi;

//graph 4 (sangat tinggi)
$a = 8;
$b = 9;
$c = 10;
$d = 10;

if ($x <= $a || $x >= $d){
    $hasil = 0;
} elseif ($x >= $a && $x <= $b) {
    $hasil = ($x-$a)/($b-$a);
} elseif ($x >= $b && $x <= $c) {
    $hasil = 1;
} elseif ($x >= $c && $x <= $d) {
    $hasil = ($d-$x)/($d-$c);
}

//echo $hasil;
$bulat = number_format ($hasil,2);
$stinggi = $bulat;
$nil[3] = $stinggi;

//pointing
for ($i=0;$i<count($nil);$i++){
    if ($nil[$i]>0){
    $point[]="
        {
            name: 'Point $i',
            data: [[".$x.",".$nil[$i]."]]
        }
    ";
    }   
}
$titik = implode(",",$point);
?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<br>
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendah; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedang; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggi; ?>"><br>
    sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggi; ?>">
<div id="nam" style="width: 50%"></div>

<script>
    //nam---------------------------------------------------------------------------------------------chart1
Highcharts.chart('nam', {

    title: {
        text: 'Nilai Agama dan Moral (NAM)'
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
        data: [[0,1], [0,1], [3,1], [4,0]]
    },{ 
        name: 'Sedang',
        data: [[3,0], [5,1], [5,1], [7,0]]
    },{
        name: 'Tinggi',
        data: [[6,0], [7,1], [7,1], [8.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[8,0], [9,1], [9,1], [10,1]]
    },  
    <?php
        echo $titik;
    ?>    
    ],

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
</script>
<style>
    #container {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
}
</style>