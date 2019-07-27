<?php

    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    
    echo "<p>Data yang dimasukan :</p>";
    echo "<strong>Nama : $nama</strong><br>";
    echo "<strong>Jenis Kelamin : $gender</strong>";
    if ($gender == "P"){
        echo "Pria <br>";
    }    else {
        echo "Wanita <br>";
    }
    echo "<strong>Nilai : $nilnam";
    
    

    $nam10 = $_POST["nam10"];
    $nam1 = $_POST["nam1"];
    $nam2 = $_POST["nam2"];
    $nam3 = $_POST["nam3"];
    $nam4 = $_POST["nam4"];
    $nam5 = $_POST["nam5"];
    $nam6 = $_POST["nam6"];
    $nam7 = $_POST["nam7"];
    $nam8 = $_POST["nam8"];
    $nam9 = $_POST["nam9"];

$nilnam = (($nam10+$nam1+$nam2+$nam3+$nam4+$nam5+$nam6+$nam7+$nam8+$nam9)/40)*10;
$des = round($nilnam, 1); 
echo $des;
    
/*
    echo "<strong> nilai";
    if ($nilai == "1"){
        echo "Rendah";
    }    elseif ($nilai == "2"){
        echo "Sedang";
    }    elseif ($nilai == "3"){
        echo "Tinggi";
    }    elseif ($nilai == "4"){
        echo "Sangat TInggi";
    }*/
?>
