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


<?php
//SOSEM-------------------------------------------------------2
$xsosem = 3.3;
echo"Nilai Sosial Emosional (SOSEM) = ".$xsosem."<br />";


//graph 1 (rendah)
$asosem = 0;
$bsosem = 0;
$csosem = 1;
$dsosem = 2;

if ($xsosem <= $asosem || $xsosem >= $dsosem){
    $hasilsosem = 0;
} elseif ($xsosem >= $asosem && $xsosem <= $bsosem) {
    $hasilsosem = ($xsosem-$asosem)/($bsosem-$asosem);
} elseif ($xsosem >= $bsosem && $xsosem <= $csosem) {
    $hasilsosem = 1;
} elseif ($xsosem >= $csosem && $xsosem <= $dsosem) {
    $hasilsosem = ($dsosem-$xsosem)/($dsosem-$csosem);
}

//echo $hasilsosem;
$bulatsosem = number_format ($hasilsosem,2);
$rendahsosem = $bulatsosem;
$nilsosem[0] = $rendahsosem;


//graph 2 (sedang)
$asosem = 1;
$bsosem = 2;
$csosem = 2;
$dsosem = 3;

if ($xsosem <= $asosem || $xsosem >= $dsosem){
    $hasilsosem = 0;
} elseif ($xsosem >= $asosem && $xsosem <= $bsosem) {
    $hasilsosem = ($xsosem-$asosem)/($bsosem-$asosem);
} elseif ($xsosem >= $bsosem && $xsosem <= $csosem) {
    $hasilsosem = 1;
} elseif ($xsosem >= $csosem && $xsosem <= $dsosem) {
    $hasilsosem = ($dsosem-$xsosem)/($dsosem-$csosem);
}

//echo $hasilsosem;
$bulatsosem = number_format ($hasilsosem,2);
$sedangsosem = $bulatsosem;
$nilsosem[1] = $sedangsosem;

//graph 3 (tinggi)
$asosem = 2;
$bsosem = 3;
$csosem = 4;
$dsosem = 4;

if ($xsosem <= $asosem || $xsosem >= $dsosem){
    $hasilsosem = 0;
} elseif ($xsosem >= $asosem && $xsosem <= $bsosem) {
    $hasilsosem = ($xsosem-$asosem)/($bsosem-$asosem);
} elseif ($xsosem >= $bsosem && $xsosem <= $csosem) {
    $hasilsosem = 1;
} elseif ($xsosem >= $csosem && $xsosem <= $dsosem) {
    $hasilsosem = ($dsosem-$xsosem)/($dsosem-$csosem);
}

//echo $hasilsosem;
$bulatsosem = number_format ($hasilsosem,2);
$tinggisosem = $bulatsosem;
$nilsosem[2] = $tinggisosem;

//pointing
for ($i=0;$i<count($nilsosem);$i++){
    if ($nilsosem[$i]>0){
    $pointsosem[]="
        {
            name: 'Point $i',
            data: [[".$xsosem.",".$nilsosem[$i]."]]
        }
    ";
    }   
}
$titiksosem = implode(",",$pointsosem);
?>


<?php
//BHS-------------------------------------------------------3
$xbhs = 3.9;
echo"Nilai Bahasa (BHS)                      = ".$xbhs."<br />";


//graph 1 (rendah)
$abhs = 0;
$bbhs = 0;
$cbhs = 1;
$dbhs = 2;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//echo $hasilbhs;
$bulatbhs = number_format ($hasilbhs,2);
$rendahbhs = $bulatbhs;
$nilbhs[0] = $rendahbhs;


//graph 2 (sedang)
$abhs = 1;
$bbhs = 2;
$cbhs = 2;
$dbhs = 3;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//echo $hasilbhs;
$bulatbhs = number_format ($hasilbhs,2);
$sedangbhs = $bulatbhs;
$nilbhs[1] = $sedangbhs;

//graph 3 (tinggi)
$abhs = 2;
$bbhs = 3;
$cbhs = 3;
$dbhs = 3.5;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//echo $hasilbhs;
$bulatbhs = number_format ($hasilbhs,2);
$tinggibhs = $bulatbhs;
$nilbhs[2] = $tinggibhs;

//graph 4 (sangat tinggi)
$abhs = 3;
$bbhs = 3.5;
$cbhs = 4;
$dbhs = 4;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//echo $hasilbhs;
$bulatbhs = number_format ($hasilbhs,2);
$stinggibhs = $bulatbhs;
$nilbhs[3] = $stinggibhs;

//pointingbhs
for ($i=0;$i<count($nilbhs);$i++){
    if ($nilbhs[$i]>0){
    $pointbhs[]="
        {
            name: 'Point $i',
            data: [[".$xbhs.",".$nilbhs[$i]."]]
        }
    ";
    }   
}
$titikbhs = implode(",",$pointbhs);
?>


<?php
//SENI-------------------------------------------------------4
$xseni = 3.9;
echo"Nilai Seni (SENI)                        = ".$xseni."<br />";


//graph 1 (rendah)
$aseni = 0;
$bseni = 0;
$cseni = 1;
$dseni = 2;

if ($xseni <= $aseni || $xseni >= $dseni){
    $hasilseni = 0;
} elseif ($xseni >= $aseni && $xseni <= $bseni) {
    $hasilseni = ($xseni-$aseni)/($bseni-$aseni);
} elseif ($xseni >= $bseni && $xseni <= $cseni) {
    $hasilseni = 1;
} elseif ($xseni >= $cseni && $xseni <= $dseni) {
    $hasilseni = ($dseni-$xseni)/($dseni-$cseni);
}

//echo $hasilseni;
$bulatseni = number_format ($hasilseni,2);
$rendahseni = $bulatseni;
$nilseni[0] = $rendahseni;


//graph 2 (sedang)
$aseni = 1;
$bseni = 2;
$cseni = 2;
$dseni = 3;

if ($xseni <= $aseni || $xseni >= $dseni){
    $hasilseni = 0;
} elseif ($xseni >= $aseni && $xseni <= $bseni) {
    $hasilseni = ($xseni-$aseni)/($bseni-$aseni);
} elseif ($xseni >= $bseni && $xseni <= $cseni) {
    $hasilseni = 1;
} elseif ($xseni >= $cseni && $xseni <= $dseni) {
    $hasilseni = ($dseni-$xseni)/($dseni-$cseni);
}

//echo $hasilseni;
$bulatseni = number_format ($hasilseni,2);
$sedangseni = $bulatseni;
$nilseni[1] = $sedangseni;

//graph 3 (tinggi)
$aseni = 2;
$bseni = 3;
$cseni = 4;
$dseni = 4;

if ($xseni <= $aseni || $xseni >= $dseni){
    $hasilseni = 0;
} elseif ($xseni >= $aseni && $xseni <= $bseni) {
    $hasilseni = ($xseni-$aseni)/($bseni-$aseni);
} elseif ($xseni >= $bseni && $xseni <= $cseni) {
    $hasilseni = 1;
} elseif ($xseni >= $cseni && $xseni <= $dseni) {
    $hasilseni = ($dseni-$xseni)/($dseni-$cseni);
}

//echo $hasilseni;
$bulatseni = number_format ($hasilseni,2);
$tinggiseni = $bulatseni;
$nilseni[2] = $tinggiseni;

//pointing
for ($i=0;$i<count($nilseni);$i++){
    if ($nilseni[$i]>0){
    $pointseni[]="
        {
            name: 'Point $i',
            data: [[".$xseni.",".$nilseni[$i]."]]
        }
    ";
    }   
}
$titikseni = implode(",",$pointseni);
?>



<?php
//kognitif-------------------------------------------------------5
$xkog = 3.9;
echo"Nilai Kognitif (KOG)                    = ".$xkog."<br />";


//graph 1 (rendah)
$akog = 0;
$bkog = 0;
$ckog = 1;
$dkog = 2;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//echo $hasilkog;
$bulatkog = number_format ($hasilkog,2);
$rendahkog = $bulatkog;
$nilkog[0] = $rendahkog;


//graph 2 (sedang)
$akog = 1;
$bkog = 2;
$ckog = 2;
$dkog = 3;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//echo $hasilkog;
$bulatkog = number_format ($hasilkog,2);
$sedangkog = $bulatkog;
$nilkog[1] = $sedangkog;

//graph 3 (tinggi)
$akog = 2;
$bkog = 3;
$ckog = 3;
$dkog = 3.5;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//echo $hasilkog;
$bulatkog = number_format ($hasilkog,2);
$tinggikog = $bulatkog;
$nilkog[2] = $tinggikog;

//graph 4 (sangat tinggi)
$akog = 3;
$bkog = 3.5;
$ckog = 4;
$dkog = 4;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//echo $hasilkog;
$bulatkog = number_format ($hasilkog,2);
$stinggikog = $bulatkog;
$nilkog[3] = $stinggikog;

//pointingkog
for ($i=0;$i<count($nilkog);$i++){
    if ($nilkog[$i]>0){
    $pointkog[]="
        {
            name: 'Point $i',
            data: [[".$xkog.",".$nilkog[$i]."]]
        }
    ";
    }   
}
$titikkog = implode(",",$pointkog);
?>


<?php
//Fismot-------------------------------------------------------6
$xfismot = 3.9;
echo"Nilai Fisik Motorik (FISMOT)    = ".$xfismot."<br />";


//graph 1 (rendah)
$afismot = 0;
$bfismot = 0;
$cfismot = 1;
$dfismot = 2;

if ($xfismot <= $afismot || $xfismot >= $dfismot){
    $hasilfismot = 0;
} elseif ($xfismot >= $afismot && $xfismot <= $bfismot) {
    $hasilfismot = ($xfismot-$afismot)/($bfismot-$afismot);
} elseif ($xfismot >= $bfismot && $xfismot <= $cfismot) {
    $hasilfismot = 1;
} elseif ($xfismot >= $cfismot && $xfismot <= $dfismot) {
    $hasilfismot = ($dfismot-$xfismot)/($dfismot-$cfismot);
}

//echo $hasilfismot;
$bulatfismot = number_format ($hasilfismot,2);
$rendahfismot = $bulatfismot;
$nilfismot[0] = $rendahfismot;


//graph 2 (sedang)
$afismot = 1;
$bfismot = 2;
$cfismot = 2;
$dfismot = 3;

if ($xfismot <= $afismot || $xfismot >= $dfismot){
    $hasilfismot = 0;
} elseif ($xfismot >= $afismot && $xfismot <= $bfismot) {
    $hasilfismot = ($xfismot-$afismot)/($bfismot-$afismot);
} elseif ($xfismot >= $bfismot && $xfismot <= $cfismot) {
    $hasilfismot = 1;
} elseif ($xfismot >= $cfismot && $xfismot <= $dfismot) {
    $hasilfismot = ($dfismot-$xfismot)/($dfismot-$cfismot);
}

//echo $hasilfismot;
$bulatfismot = number_format ($hasilfismot,2);
$sedangfismot = $bulatfismot;
$nilfismot[1] = $sedangfismot;

//graph 3 (tinggi)
$afismot = 2;
$bfismot = 3;
$cfismot = 4;
$dfismot = 4;

if ($xfismot <= $afismot || $xfismot >= $dfismot){
    $hasilfismot = 0;
} elseif ($xfismot >= $afismot && $xfismot <= $bfismot) {
    $hasilfismot = ($xfismot-$afismot)/($bfismot-$afismot);
} elseif ($xfismot >= $bfismot && $xfismot <= $cfismot) {
    $hasilfismot = 1;
} elseif ($xfismot >= $cfismot && $xfismot <= $dfismot) {
    $hasilfismot = ($dfismot-$xfismot)/($dfismot-$cfismot);
}

//echo $hasilfismot;
$bulatfismot = number_format ($hasilfismot,2);
$tinggifismot = $bulatfismot;
$nilfismot[2] = $tinggifismot;

//pointing
for ($i=0;$i<count($nilfismot);$i++){
    if ($nilfismot[$i]>0){
    $pointfismot[]="
        {
            name: 'Point $i',
            data: [[".$xfismot.",".$nilfismot[$i]."]]
        }
    ";
    }   
}
$titikfismot = implode(",",$pointfismot);
?>

<?php
//defuzzyfikasi nam dan sosem-----------------------------------------defuzzy 1
for ($i=0; $i<count($nilsosem); $i++){
    for ($k=0; $k<count($nil); $k++){
        if ($nilsosem[$i]>$nil[$k]){
        $defuadansosem [$i][$k] = $nilsosem[$i];
        }else{
        $defuadansosem [$i][$k] = $nil[$k];
        }
    }
}
//print_r($defuadansosem);

?>

<?php
//defuzzyfikasi bahasa dan seni-----------------------------------------defuzzy 2
for ($i=0; $i<count($nilseni); $i++){
    for ($k=0; $k<count($nilbhs); $k++){
        if ($nilseni[$i]>$nilbhs[$k]){
        $defubhsdanseni [$i][$k] = $nilseni[$i];
        }else{
        $defubhsdanseni [$i][$k] = $nilbhs[$k];
        }
    }
}
//print_r($defubhsdanseni);

?>


<?php
//defuzzyfikasi kog dan fismot-----------------------------------------defuzzy 3
for ($i=0; $i<count($nilfismot); $i++){
    for ($k=0; $k<count($nilkog); $k++){
        if ($nilfismot[$i]>$nilkog[$k]){
        $defukogdanfm [$i][$k] = $nilfismot[$i];
        }else{
        $defukogdanfm [$i][$k] = $nilkog[$k];
        }
    }
}
//print_r($defukogdanfm);

?>


<?php
//SUGENO NAM DAN SOSEM ---------------------------------------------------------------sug1
$q=0;
$pembagi1 = 0;
$bb1  = (($defuadansosem[0][0]+$defuadansosem[0][1]+$defuadansosem[1][0])*1)+$q;
$mb1  = (($defuadansosem[0][2]+$defuadansosem[0][3]+$defuadansosem[1][1]+$defuadansosem[2][0])*2)+$q;
$bsh1 = (($defuadansosem[1][2]+$defuadansosem[2][1])*3)+$q;
$bsb1 = (($defuadansosem[1][3]+$defuadansosem[2][2]+$defuadansosem[2][3])*4)+$q; 
for ($z=0; $z<count($nilsosem); $z++){
    for ($y=0; $y<count($nil); $y++){
    $pembagi1 = $pembagi1+$defuadansosem[$z][$y];
        }
    }
    $akhir1 = round(($bb1+$mb1+$bsh1+$bsb1)/$pembagi1,2);
//    echo $akhir1;
?>

<?php
//SUGENO BHS DAN SENI ---------------------------------------------------------------sug2
$q=0;
$pembagi2 = 0;
$bb2  = (($defubhsdanseni[0][0]+$defubhsdanseni[0][1]+$defubhsdanseni[1][0])*0)+$q;
$mb2  = (($defubhsdanseni[0][2]+$defubhsdanseni[0][3]+$defubhsdanseni[1][1])*0.5)+$q;
$bsh2 = (($defubhsdanseni[1][2]+$defubhsdanseni[1][3]+$defubhsdanseni[2][0]+$defubhsdanseni[2][1])*1)+$q;
$bsb2 = (($defubhsdanseni[2][2]+$defubhsdanseni[2][3])*1.5)+$q; 
for ($z=0; $z<count($nilseni); $z++){
    for ($y=0; $y<count($nilbhs); $y++){
    $pembagi2 = $pembagi2+$defubhsdanseni[$z][$y];
        }
    }
    $akhir2 = round(($bb2+$mb2+$bsh2+$bsb2)/$pembagi2,2);
//    echo $akhir2;
?>

<?php
//SUGENO KOG DAN FM ---------------------------------------------------------------sug3
$q=0;
$pembagi3 = 0;
$bb3  = (($defukogdanfm[0][0]+$defukogdanfm[1][0])*0)+$q;
$mb3  = (($defukogdanfm[0][1]+$defukogdanfm[0][2]+$defukogdanfm[0][3]+$defukogdanfm[1][1]+$defukogdanfm[2][0])*0.5)+$q;
$bsh3 = (($defukogdanfm[1][2]+$defukogdanfm[1][3]+$defukogdanfm[2][1])*1)+$q;
$bsb3 = (($defukogdanfm[2][2]+$defukogdanfm[2][3])*1.5)+$q; 
for ($z=0; $z<count($nilfismot); $z++){
    for ($y=0; $y<count($nilkog); $y++){
    $pembagi3 = $pembagi3+$defukogdanfm[$z][$y];
        }
    }
    $akhir3 = round(($bb3+$mb3+$bsh3+$bsb3)/$pembagi3,2);
//    echo $akhir3;
 $akhir = $akhir1+$akhir2+$akhir3 ; 

?>

<?php
//RUlebased

if ($akhir>= 0 && $akhir <= 3.33){ 
    $rekom='belum berkembang';
}elseif ($akhir>3.33 && $akhir<=3.82){
    $rekom='mulai berkembang';
}elseif($akhir >= 3.83 && $akhir <= 4.5){
    $rekom='berkembang sesuai harapan';
}elseif($akhir > 4.5){
    $rekom='berkembang sangat baik';
}

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
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendahsosem; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangsosem; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggisosem; ?>"><br>
    sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggisosem; ?>">
<div id="sosem" style="width: 50%"></div>
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendahbhs; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangbhs; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggibhs; ?>"><br>
    sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggibhs; ?>">
<div id="bhs" style="width: 50%"></div>
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendahseni; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangseni; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggiseni; ?>"><br>
sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggiseni; ?>">
<div id="seni" style="width: 50%"></div>
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendahkog; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangkog; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggikog; ?>"><br>
    sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggikog; ?>">
<div id="kog" style="width: 50%"></div>
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendahfismot; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangfismot; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggifismot; ?>"><br>
 sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggifismot; ?>">
<div id="fismot" style="width: 50%"></div>
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




//sosem---------------------------------------------------------------------------------------------chart2
Highcharts.chart('sosem', {

    title: {
        text: 'Sosial Emosional (SOSEM)'
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
        data: [[0,1], [0,1], [1,1], [2,0]]
    },{ 
        name: 'Sedang',
        data: [[1,0], [2,1], [2,1], [3,0]]
    },{
        name: 'Tinggi',
        data: [[2,0], [3,1], [4,1], [4,1]]
    },  
    <?php
        echo $titiksosem;
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



//bahasa---------------------------------------------------------------------------------------------chart3
Highcharts.chart('bhs', {

    title: {
        text: 'Bahasa (BHS)'
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
        data: [[0,1], [0,1], [1,1], [2,0]]
    },{ 
        name: 'Sedang',
        data: [[1,0], [2,1], [2,1], [3,0]]
    },{
        name: 'Tinggi',
        data: [[2,0], [3,1], [3,1], [3.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[3,0], [3.5,1], [4,1], [4,1]]
    },  
    <?php
        echo $titikbhs;
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

//seni---------------------------------------------------------------------------------------------chart4
Highcharts.chart('seni', {

    title: {
        text: 'Seni (SENI)'
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
        data: [[0,1], [0,1], [1,1], [2,0]]
    },{ 
        name: 'Sedang',
        data: [[1,0], [2,1], [2,1], [3,0]]
    },{
        name: 'Tinggi',
        data: [[2,0], [3,1], [4,1], [4,1]]
    },  
    <?php
        echo $titikseni;
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


//kog---------------------------------------------------------------------------------------------chart5
Highcharts.chart('kog', {

    title: {
        text: 'Kognitif (KOG)'
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
        data: [[0,1], [0,1], [1,1], [2,0]]
    },{ 
        name: 'Sedang',
        data: [[1,0], [2,1], [2,1], [3,0]]
    },{
        name: 'Tinggi',
        data: [[2,0], [3,1], [3,1], [3.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[3,0], [3.5,1], [4,1], [4,1]]
    },  
    <?php
        echo $titikkog;
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

//fismot---------------------------------------------------------------------------------------------chart6
Highcharts.chart('fismot', {

    title: {
        text: 'Fisik Motorik (FISMOT)'
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
        data: [[0,1], [0,1], [1,1], [2,0]]
    },{ 
        name: 'Sedang',
        data: [[1,0], [2,1], [2,1], [3,0]]
    },{
        name: 'Tinggi',
        data: [[2,0], [3,1], [4,1], [4,1]]
    },  
    <?php
        echo $titikfismot;
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
//---------------------------------------------------------------------------------------------tabledefuz1
<table border="1px solid">
    <tr>
        <td>Defuzzyfikasi Agama dan Sosial</td>
        <td>rendah</td>
        <td>sedang</td>
        <td>tinggi</td>
        <td>sangat tinggi</td>
    </tr>
    <tr>
        <td>Rendah</td>
        <td>BB (<?php echo $defuadansosem[0][0]; ?>)</td>
        <td>BB (<?php echo $defuadansosem[0][1]; ?>)</td>
        <td>MB (<?php echo $defuadansosem[0][2]; ?>)</td>
        <td>MB (<?php echo $defuadansosem[0][3]; ?>)</td>
    </tr>
    <tr>
        <td>Sedang</td>
        <td>BB (<?php echo $defuadansosem[1][0]; ?>)</td>
        <td>MB (<?php echo $defuadansosem[1][1]; ?>)</td>
        <td>BSH (<?php echo $defuadansosem[1][2]; ?>)</td>
        <td>BSB (<?php echo $defuadansosem[1][3]; ?>)</td>
    </tr>
     <tr>
        <td>tinggi</td>
        <td>MB (<?php echo $defuadansosem[2][0]; ?>)</td>
        <td>BSH (<?php echo $defuadansosem[2][1]; ?>)</td>
        <td>BSB (<?php echo $defuadansosem[2][2]; ?>)</td>
        <td>BSB (<?php echo $defuadansosem[2][3]; ?>)</td>
    </tr>
</table>
<br />
//---------------------------------------------------------------------------------------------tabledefuz2
<table border="1px solid">
    <tr>
        <td>Defuzzyfikasi Bahasa dan Seni</td>
        <td>rendah</td>
        <td>sedang</td>
        <td>tinggi</td>
        <td>sangat tinggi</td>
    </tr>
    <tr>
        <td>Rendah</td>
        <td>BB (<?php echo $defubhsdanseni[0][0]; ?>)</td>
        <td>BB (<?php echo $defubhsdanseni[0][1]; ?>)</td>
        <td>MB (<?php echo $defubhsdanseni[0][2]; ?>)</td>
        <td>MB (<?php echo $defubhsdanseni[0][3]; ?>)</td>
    </tr>
    <tr>
        <td>Sedang</td>
        <td>BB (<?php echo $defubhsdanseni[1][0]; ?>)</td>
        <td>MB (<?php echo $defubhsdanseni[1][1]; ?>)</td>
        <td>BSH (<?php echo $defubhsdanseni[1][2]; ?>)</td>
        <td>BSH (<?php echo $defubhsdanseni[1][3]; ?>)</td>
    </tr>
     <tr>
        <td>tinggi</td>
        <td>BSH (<?php echo $defubhsdanseni[2][0]; ?>)</td>
        <td>BSH (<?php echo $defubhsdanseni[2][1]; ?>)</td>
        <td>BSB (<?php echo $defubhsdanseni[2][2]; ?>)</td>
        <td>BSB (<?php echo $defubhsdanseni[2][3]; ?>)</td>
    </tr>
</table>
<br />
//---------------------------------------------------------------------------------------------tabledefuz3
<table border="1px solid">
    <tr>
        <td>Defuzzyfikasi Kog dan Fismot</td>
        <td>rendah</td>
        <td>sedang</td>
        <td>tinggi</td>
        <td>sangat tinggi</td>
    </tr>
    <tr>
        <td>Rendah</td>
        <td>BB (<?php echo $defukogdanfm[0][0]; ?>)</td>
        <td>MB (<?php echo $defukogdanfm[0][1]; ?>)</td>
        <td>MB (<?php echo $defukogdanfm[0][2]; ?>)</td>
        <td>MB (<?php echo $defukogdanfm[0][3]; ?>)</td>
    </tr>
    <tr>
        <td>Sedang</td>
        <td>BB (<?php echo $defukogdanfm[1][0]; ?>)</td>
        <td>MB (<?php echo $defukogdanfm[1][1]; ?>)</td>
        <td>BSH (<?php echo $defukogdanfm[1][2]; ?>)</td>
        <td>BSH (<?php echo $defukogdanfm[1][3]; ?>)</td>
    </tr>
     <tr>
        <td>tinggi</td>
        <td>MB (<?php echo $defukogdanfm[2][0]; ?>)</td>
        <td>BSH (<?php echo $defukogdanfm[2][1]; ?>)</td>
        <td>BSB (<?php echo $defukogdanfm[2][2]; ?>)</td>
        <td>BSB (<?php echo $defukogdanfm[2][3]; ?>)</td>
    </tr>
</table>
<br>
nilai akhir=<?php
echo $akhir;
?>
<br>
rekomendasi = <?php
echo $rekom;
?>
<style>
	#container {
	min-width: 310px;
	max-width: 800px;
	height: 400px;
	margin: 0 auto
}
</style>