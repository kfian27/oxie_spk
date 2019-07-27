
<!-- ///////////////////////////////////////////..............[FUZZIFIKASI]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- ///////////////////////////////////////////..............[FUZZIFIKASI]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- ///////////////////////////////////////////..............[FUZZIFIKASI]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<?php
//------------------------------------------------------------------------------------------- 1. [Fuzzifikasi] NAM
//oxie param

// $par1 = 10;
// $par2 = 10;
// $par3 = 10;
// $par4 = 10;
// $par5 = 10;
// $par6 = 10;

// $par1 = 7.9;
// $par2 = 8.1; 
// $par3 = 7.7;
// $par4 = 8.4;
// $par5 = 7.1;
// $par6 = 8.3;

// $par1 = 7.7;
// $par2 = 8.4;
// $par3 = 7.1;
// $par4 = 8.3;
// $par5 = 7.9;
// $par6 = 8.1;

// $par1 = 5;
// $par2 = 5;
// $par3 = 5;
// $par4 = 5;
// $par5 = 5;
// $par6 = 5;

// $par1 = 2.5;
// $par2 = 2.5;
// $par3 = 2.5;
// $par4 = 2.5;
// $par5 = 2.5;
// $par6 = 2.5;

$par1 = 3.9;
$par2 = 3.7;
$par3 = 6.1;
$par4 = 3.6;
$par5 = 9.4;
$par6 = 8.7;

// Rendah  : 3,    3-4 
// Sedang  : 3-4,   5,     6-7
// Tinggi  : 6-7,   7,     8-8.5
// STinggi : 8-8.5,     9

$xnam = $par1;
echo"Nilai Agama dan Moral (NAM)     = ".$xnam."<br />";


//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph NAM (RENDAH)

    


$anam = 0;
$bnam = 0;
$cnam = 3;
$dnam = 4;

if ($xnam <= $anam || $xnam >= $dnam){
    $hasilnam = 0;
} elseif ($xnam >= $anam && $xnam <= $bnam) {
    $hasilnam = ($xnam-$anam)/($bnam-$anam);
} elseif ($xnam >= $bnam && $xnam <= $cnam) {
    $hasilnam = 1;
} elseif ($xnam >= $cnam && $xnam <= $dnam) {
    $hasilnam = ($dnam-$xnam)/($dnam-$cnam);
}

//________________________________ echo $hasil [Fuzzifikasi] NAM (RENDAH)
$bulatnam = number_format ($hasilnam,2);
$rendahnam = $bulatnam;
$nilnam[0] = $rendahnam;


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph NAM (SEDANG)


$anam = 3;
$bnam = 5;
$cnam = 5;
$dnam = 7;

if ($xnam <= $anam || $xnam >= $dnam){
    $hasilnam = 0;
} elseif ($xnam >= $anam && $xnam <= $bnam) {
    $hasilnam = ($xnam-$anam)/($bnam-$anam);
} elseif ($xnam >= $bnam && $xnam <= $cnam) {
    $hasilnam = 1;
} elseif ($xnam >= $cnam && $xnam <= $dnam) {
    $hasilnam = ($dnam-$xnam)/($dnam-$cnam);
}

//________________________________ echo $hasil [Fuzzifikasi] NAM (SEDANG)
$bulatnam = number_format ($hasilnam,2);
$sedangnam = $bulatnam;
$nilnam[1] = $sedangnam;

//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph NAM (TINGGI)




$anam = 6;
$bnam = 7;
$cnam = 7;
$dnam = 8.5;

if ($xnam <= $anam || $xnam >= $dnam){
    $hasilnam = 0;
} elseif ($xnam >= $anam && $xnam <= $bnam) {
    $hasilnam = ($xnam-$anam)/($bnam-$anam);
} elseif ($xnam >= $bnam && $xnam <= $cnam) {
    $hasilnam = 1;
} elseif ($xnam >= $cnam && $xnam <= $dnam) {
    $hasilnam = ($dnam-$xnam)/($dnam-$cnam);
}
//________________________________ echo $hasil [Fuzzifikasi] NAM (TINGGI)
$bulatnam = number_format ($hasilnam,2);
$tingginam = $bulatnam;
$nilnam[2] = $tingginam;

//++++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph NAM (SANGATTINGGI)

$anam = 8;
$bnam = 9;
$cnam = 10.1;
$dnam = 10.1;

if ($xnam <= $anam || $xnam >= $dnam){
    $hasilnam = 0;
} elseif ($xnam >= $anam && $xnam <= $bnam) {
    $hasilnam = ($xnam-$anam)/($bnam-$anam);
} elseif ($xnam >= $bnam && $xnam <= $cnam) {
    $hasilnam = 1;
} elseif ($xnam >= $cnam && $xnam <= $dnam) {
    $hasilnam = ($dnam-$xnam)/($dnam-$cnam);
}

//________________________________ echo $hasil [Fuzzifikasi] NAM (SANGATTINGGI)
$bulatnam = number_format ($hasilnam,2);
$stingginam = $bulatnam;
$nilnam[3] = $stingginam;

//============================================================================= pointing 1. Graph NAM
for ($i=0;$i<count($nilnam);$i++){
    if ($nilnam[$i]>0){
    $pointnam[]="
        {
            name: 'Point $i',
            data: [[".$xnam.",".$nilnam[$i]."]]
        }
    ";
    }   
}
$titiknam = implode(",",$pointnam);
?>

<?php
//------------------------------------------------------------------------------------------- 2. [Fuzzifikasi] SOSEM
$xsosem = $par2;
echo"Nilai Sosial Emosional (SOSEM) = ".$xsosem."<br />";


//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SOSEM (RENDAH)



$asosem = 0;
$bsosem = 0;
$csosem = 3;
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

//________________________________ echo $hasil [Fuzzifikasi] SOSEM (RENDAH)
$bulatsosem = number_format ($hasilsosem,2);
$rendahsosem = $bulatsosem;
$nilsosem[0] = $rendahsosem;


////++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SOSEM (SEDANG)
$asosem = 3;
$bsosem = 5;
$csosem = 5;
$dsosem = 7;

if ($xsosem <= $asosem || $xsosem >= $dsosem){
    $hasilsosem = 0;
} elseif ($xsosem >= $asosem && $xsosem <= $bsosem) {
    $hasilsosem = ($xsosem-$asosem)/($bsosem-$asosem);
} elseif ($xsosem >= $bsosem && $xsosem <= $csosem) {
    $hasilsosem = 1;
} elseif ($xsosem >= $csosem && $xsosem <= $dsosem) {
    $hasilsosem = ($dsosem-$xsosem)/($dsosem-$csosem);
}

//________________________________ echo $hasil [Fuzzifikasi] SOSEM (SEDANG)
$bulatsosem = number_format ($hasilsosem,2);
$sedangsosem = $bulatsosem;
$nilsosem[1] = $sedangsosem;

//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SOSEM (TINGGI)
$asosem = 6;
$bsosem = 7;
$csosem = 7;
$dsosem = 8.5;

if ($xsosem <= $asosem || $xsosem >= $dsosem){
    $hasilsosem = 0;
} elseif ($xsosem >= $asosem && $xsosem <= $bsosem) {
    $hasilsosem = ($xsosem-$asosem)/($bsosem-$asosem);
} elseif ($xsosem >= $bsosem && $xsosem <= $csosem) {
    $hasilsosem = 1;
} elseif ($xsosem >= $csosem && $xsosem <= $dsosem) {
    $hasilsosem = ($dsosem-$xsosem)/($dsosem-$csosem);
}

//________________________________ echo $hasil [Fuzzifikasi] SOSEM (TINGGI)
$bulatsosem = number_format ($hasilsosem,2);
$tinggisosem = $bulatsosem;
$nilsosem[2] = $tinggisosem;


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SOSEM (SANGATTINGGI)
$asosem = 8;
$bsosem = 9;
$csosem = 10.1;
$dsosem = 10.1;

if ($xsosem <= $asosem || $xsosem >= $dsosem){
    $hasilsosem = 0;
} elseif ($xsosem >= $asosem && $xsosem <= $bsosem) {
    $hasilsosem = ($xsosem-$asosem)/($bsosem-$asosem);
} elseif ($xsosem >= $bsosem && $xsosem <= $csosem) {
    $hasilsosem = 1;
} elseif ($xsosem >= $csosem && $xsosem <= $dsosem) {
    $hasilsosem = ($dsosem-$xsosem)/($dsosem-$csosem);
}

//________________________________ echo $hasil [Fuzzifikasi] SOSEM (SANGATTINGGI)
$bulatsosem = number_format ($hasilsosem,2);
$stinggisosem = $bulatsosem;
$nilsosem[3] = $stinggisosem;

// print_r($nilsosem);

//================================================================================ pointing 2. Graph SOSEM
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
//------------------------------------------------------------------------------------------- 3. [Fuzzifikasi] BHS


$xbhs = $par3;
echo"Nilai Bahasa (bhs)                      = ".$xbhs."<br />";


//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph BHS (RENDAH)
$abhs = 0;
$bbhs = 0;
$cbhs = 3;
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

//________________________________ echo $hasil [Fuzzifikasi] BHS (RENDAH)
$bulatbhs = number_format ($hasilbhs,2);
$rendahbhs = $bulatbhs;
$nilbhs[0] = $rendahbhs;


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph BHS (SEDANG)
$abhs = 3;
$bbhs = 5;
$cbhs = 5;
$dbhs = 7;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//________________________________ echo $hasil [Fuzzifikasi] BHS (SEDANG)
$bulatbhs = number_format ($hasilbhs,2);
$sedangbhs = $bulatbhs;
$nilbhs[1] = $sedangbhs;

//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph BHS (TINGGI)
$abhs = 6;
$bbhs = 7;
$cbhs = 7;
$dbhs = 8.5;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//________________________________ echo $hasil [Fuzzifikasi] BHS (TINGGI)
$bulatbhs = number_format ($hasilbhs,2);
$tinggibhs = $bulatbhs;
$nilbhs[2] = $tinggibhs;

//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph BHS (SANGATTINGGI)
$abhs = 8;
$bbhs = 9;
$cbhs = 10.1;
$dbhs = 10.1;

if ($xbhs <= $abhs || $xbhs >= $dbhs){
    $hasilbhs = 0;
} elseif ($xbhs >= $abhs && $xbhs <= $bbhs) {
    $hasilbhs = ($xbhs-$abhs)/($bbhs-$abhs);
} elseif ($xbhs >= $bbhs && $xbhs <= $cbhs) {
    $hasilbhs = 1;
} elseif ($xbhs >= $cbhs && $xbhs <= $dbhs) {
    $hasilbhs = ($dbhs-$xbhs)/($dbhs-$cbhs);
}

//________________________________ echo $hasil [Fuzzifikasi] BHS (SANGATTINGGI)
$bulatbhs = number_format ($hasilbhs,2);
$stinggibhs = $bulatbhs;
$nilbhs[3] = $stinggibhs;

//============================================================================= pointing 3. Graph BHS
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
//------------------------------------------------------------------------------------------- 4. [Fuzzifikasi] KOG
$xkog = $par4;
echo"Nilai Kognitif (KOG)                    = ".$xkog."<br />";


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph KOG (RENDAH)
$akog = 0;
$bkog = 0;
$ckog = 3;
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

//________________________________ echo $hasil [Fuzzifikasi] KOG (RENDAH)
$bulatkog = number_format ($hasilkog,2);
$rendahkog = $bulatkog;
$nilkog[0] = $rendahkog;


//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph KOG (SEDANG)
$akog = 3;
$bkog = 5;
$ckog = 5;
$dkog = 7;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//________________________________ echo $hasil [Fuzzifikasi] KOG (SEDANG)
$bulatkog = number_format ($hasilkog,2);
$sedangkog = $bulatkog;
$nilkog[1] = $sedangkog;

//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph KOG (TINGGI)
$akog = 6;
$bkog = 7;
$ckog = 7;
$dkog = 8.5;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//________________________________ echo $hasil [Fuzzifikasi] KOG (TINGGI)
$bulatkog = number_format ($hasilkog,2);
$tinggikog = $bulatkog;
$nilkog[2] = $tinggikog;

//+++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph KOG (SANGATTINGGI)
$akog = 8;
$bkog = 9;
$ckog = 10.1;
$dkog = 10.1;

if ($xkog <= $akog || $xkog >= $dkog){
    $hasilkog = 0;
} elseif ($xkog >= $akog && $xkog <= $bkog) {
    $hasilkog = ($xkog-$akog)/($bkog-$akog);
} elseif ($xkog >= $bkog && $xkog <= $ckog) {
    $hasilkog = 1;
} elseif ($xkog >= $ckog && $xkog <= $dkog) {
    $hasilkog = ($dkog-$xkog)/($dkog-$ckog);
}

//________________________________ echo $hasil [Fuzzifikasi] KOG (SANGATTINGGI)
$bulatkog = number_format ($hasilkog,2);
$stinggikog = $bulatkog;
$nilkog[3] = $stinggikog;

//============================================================================= pointing 4. Graph KOG
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
//------------------------------------------------------------------------------------------- 5. [Fuzzifikasi] SENI
$xseni = $par5;
echo"Nilai Seni (SENI)                        = ".$xseni."<br />";


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SENI (RENDAH)
$aseni = 0;
$bseni = 0;
$cseni = 3;
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

//________________________________ echo $hasil [Fuzzifikasi] SENI (RENDAH)
$bulatseni = number_format ($hasilseni,2);
$rendahseni = $bulatseni;
$nilseni[0] = $rendahseni;


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SENI (SEDANG)
$aseni = 3;
$bseni = 5;
$cseni = 5;
$dseni = 7;

if ($xseni <= $aseni || $xseni >= $dseni){
    $hasilseni = 0;
} elseif ($xseni >= $aseni && $xseni <= $bseni) {
    $hasilseni = ($xseni-$aseni)/($bseni-$aseni);
} elseif ($xseni >= $bseni && $xseni <= $cseni) {
    $hasilseni = 1;
} elseif ($xseni >= $cseni && $xseni <= $dseni) {
    $hasilseni = ($dseni-$xseni)/($dseni-$cseni);
}

//________________________________ echo $hasil [Fuzzifikasi] SENI (SEDANG)
$bulatseni = number_format ($hasilseni,2);
$sedangseni = $bulatseni;
$nilseni[1] = $sedangseni;

//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SENI (TINGGI)
$aseni = 6;
$bseni = 7;
$cseni = 7;
$dseni = 8.5;

if ($xseni <= $aseni || $xseni >= $dseni){
    $hasilseni = 0;
} elseif ($xseni >= $aseni && $xseni <= $bseni) {
    $hasilseni = ($xseni-$aseni)/($bseni-$aseni);
} elseif ($xseni >= $bseni && $xseni <= $cseni) {
    $hasilseni = 1;
} elseif ($xseni >= $cseni && $xseni <= $dseni) {
    $hasilseni = ($dseni-$xseni)/($dseni-$cseni);
}

//________________________________ echo $hasil [Fuzzifikasi] SENI (TINGGI)
$bulatseni = number_format ($hasilseni,2);
$tinggiseni = $bulatseni;
$nilseni[2] = $tinggiseni;


//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph SENI (SANGATTINGGI)
$aseni = 8;
$bseni = 9;
$cseni = 10.1;
$dseni = 10.1;

if ($xseni <= $aseni || $xseni >= $dseni){
    $hasilseni = 0;
} elseif ($xseni >= $aseni && $xseni <= $bseni) {
    $hasilseni = ($xseni-$aseni)/($bseni-$aseni);
} elseif ($xseni >= $bseni && $xseni <= $cseni) {
    $hasilseni = 1;
} elseif ($xseni >= $cseni && $xseni <= $dseni) {
    $hasilseni = ($dseni-$xseni)/($dseni-$cseni);
}

//________________________________ echo $hasil [Fuzzifikasi] SENI (SANGATTINGGI)
$bulatseni = number_format ($hasilseni,2);
$stinggiseni = $bulatseni;
$nilseni[3] = $stinggiseni;

//============================================================================== pointing 5. Graph SENI
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
//------------------------------------------------------------------------------------------- 6. [Fuzzifikasi] FISMOT
$xfismot = $par6;
echo"Nilai Fisik Motorik (FISMOT)    = ".$xfismot."<br />";


//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph FISMOT (RENDAH)
$afismot = 0;
$bfismot = 0;
$cfismot = 3;
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

//________________________________ echo $hasil [Fuzzifikasi] FISMOT (RENDAH)
$bulatfismot = number_format ($hasilfismot,2);
$rendahfismot = $bulatfismot;
$nilfismot[0] = $rendahfismot;


//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph FISMOT (SEDANG)
$afismot = 3;
$bfismot = 5;
$cfismot = 5;
$dfismot = 7;

if ($xfismot <= $afismot || $xfismot >= $dfismot){
    $hasilfismot = 0;
} elseif ($xfismot >= $afismot && $xfismot <= $bfismot) {
    $hasilfismot = ($xfismot-$afismot)/($bfismot-$afismot);
} elseif ($xfismot >= $bfismot && $xfismot <= $cfismot) {
    $hasilfismot = 1;
} elseif ($xfismot >= $cfismot && $xfismot <= $dfismot) {
    $hasilfismot = ($dfismot-$xfismot)/($dfismot-$cfismot);
}

//________________________________ echo $hasil [Fuzzifikasi] FISMOT (SEDANG)
$bulatfismot = number_format ($hasilfismot,2);
$sedangfismot = $bulatfismot;
$nilfismot[1] = $sedangfismot;

//++++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph FISMOT (TINGGI)
$afismot = 6;
$bfismot = 7;
$cfismot = 7;
$dfismot = 8.5;

if ($xfismot <= $afismot || $xfismot >= $dfismot){
    $hasilfismot = 0;
} elseif ($xfismot >= $afismot && $xfismot <= $bfismot) {
    $hasilfismot = ($xfismot-$afismot)/($bfismot-$afismot);
} elseif ($xfismot >= $bfismot && $xfismot <= $cfismot) {
    $hasilfismot = 1;
} elseif ($xfismot >= $cfismot && $xfismot <= $dfismot) {
    $hasilfismot = ($dfismot-$xfismot)/($dfismot-$cfismot);
}

//________________________________ echo $hasil [Fuzzifikasi] FISMOT (TINGGI)
$bulatfismot = number_format ($hasilfismot,2);
$tinggifismot = $bulatfismot;
$nilfismot[2] = $tinggifismot;

//+++++++++++++++++++++++++++++++++++++++++++++ Titik x Graph FISMOT (SANGATTINGGI)
$afismot = 8;
$bfismot = 9;
$cfismot = 10.1;
$dfismot = 10.1;

if ($xfismot <= $afismot || $xfismot >= $dfismot){
    $hasilfismot = 0;
} elseif ($xfismot >= $afismot && $xfismot <= $bfismot) {
    $hasilfismot = ($xfismot-$afismot)/($bfismot-$afismot);
} elseif ($xfismot >= $bfismot && $xfismot <= $cfismot) {
    $hasilfismot = 1;
} elseif ($xfismot >= $cfismot && $xfismot <= $dfismot) {
    $hasilfismot = ($dfismot-$xfismot)/($dfismot-$cfismot);
}

//________________________________ echo $hasil [Fuzzifikasi] FISMOT (SANGATTINGGI)
$bulatfismot = number_format ($hasilfismot,2);
$stinggifismot = $bulatfismot;
$nilfismot[3] = $stinggifismot;

//============================================================================= pointing 6. Graph FISMOT
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

<!-- ///////////////////////////////////////////..............[DEFUZZIFIKASI]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- ///////////////////////////////////////////..............[DEFUZZIFIKASI]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- ///////////////////////////////////////////..............[DEFUZZIFIKASI]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<?php
//------------------------------------------------------------------------------------------- 1. [Deffuzifikasi] NAM n SOSEM
for ($i=0; $i<count($nilsosem); $i++){
    for ($k=0; $k<count($nilnam); $k++){
        if ($nilsosem[$i]>$nilnam[$k]){
        $defunamsosem [$i][$k] = $nilsosem[$i];
        }else{
        $defunamsosem [$i][$k] = $nilnam[$k];
        }
    }
}
//print_r($defunamdansosem);

?>

<?php
//------------------------------------------------------------------------------------------- 2. [Deffuzifikasi] BHS n KOG
for ($i=0; $i<count($nilkog); $i++){
    for ($k=0; $k<count($nilbhs); $k++){
        if ($nilkog[$i]>$nilbhs[$k]){
        $defubhskog [$i][$k] = $nilkog[$i];
        }else{
        $defubhskog [$i][$k] = $nilbhs[$k];
        }
    }
}
//print_r($defubhskog);

?>


<?php
//------------------------------------------------------------------------------------------- 3. [Deffuzifikasi] SENI n FISMOT
for ($i=0; $i<count($nilfismot); $i++){
    for ($k=0; $k<count($nilseni); $k++){
        if ($nilfismot[$i]>$nilseni[$k]){
        $defusenifismot [$i][$k] = $nilfismot[$i];
        }else{
        $defusenifismot [$i][$k] = $nilseni[$k];
        }
    }
}
//print_r($defusenifismot);

?>

<!-- /////////////////////////////////////////..............[INFERENCE SYSTEM]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- /////////////////////////////////////////..............[INFERENCE SYSTEM]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
<!-- /////////////////////////////////////////..............[INFERENCE SYSTEM]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

<?php
//------------------------------------------------------------------------------------------- 1. [Inference System] NAM n SOSEM

//oxie
$q=0;
$pembagi1 = 0;
$bs1  = (($defunamsosem[0][0]+$defunamsosem[0][1]+$defunamsosem[1][0]+$defunamsosem[0][2])*0.5)+$q;
$dp1  = (($defunamsosem[0][3]+$defunamsosem[1][1]+$defunamsosem[1][2])*1)+$q;
$ss1 = (($defunamsosem[2][1]+$defunamsosem[2][2]+$defunamsosem[2][3]+$defunamsosem[3][1]+$defunamsosem[3][2]+$defunamsosem[3][3]+$defunamsosem[1][3]+$defunamsosem[2][0]+$defunamsosem[3][0])*1.5)+$q;
for ($z=0; $z<count($nilsosem); $z++){
    for ($y=0; $y<count($nilnam); $y++){
    $pembagi1 = $pembagi1+$defunamsosem[$z][$y];
        }
    }
    $akhir1 = round(($bs1+$dp1+$ss1)/$pembagi1,2);
    echo  "<br /> BS1 = $bs1 <br />" ;
     echo "DP1 = $dp1 <br />";
     echo "SS1 = $ss1 <br />";
     echo "$bs1+$dp1+$ss1 <br />";
     echo "dibagi $pembagi1 <br />";
     echo "= $akhir1. <br /><br />";
?>

<?php
//-----S-------------------------------------------------------------------------------------- 2. [Inference System] BHS n KOG
$q=0;
$pembagi2 = 0;
$bs2  = (($defubhskog[0][0]+$defubhskog[0][1]+$defubhskog[1][0]+$defubhskog[1][1])*2)+$q;
$dp2  = (($defubhskog[0][2]+$defubhskog[0][3]+$defubhskog[2][0]+$defubhskog[2][1]+$defubhskog[3][0])*3)+$q;
$ss2 = (($defubhskog[2][2]+$defubhskog[2][3]+$defubhskog[3][2]+$defubhskog[3][3]+$defubhskog[1][2]+$defubhskog[1][3]+$defubhskog[3][1])*4)+$q;
for ($z=0; $z<count($nilkog); $z++){
    for ($y=0; $y<count($nilbhs); $y++){
    $pembagi2 = $pembagi2+$defubhskog[$z][$y];
        }
    }
    $akhir2 = round(($bs2+$dp2+$ss2)/$pembagi2,2);
     echo  "BS2 = $bs2.<br />" ;
     echo "DP2 = $dp2.<br />";
     echo "SS2 = $ss2.<br />";
     echo "$bs2+$dp2+$ss2<br />";
     echo "dibagi $pembagi2<br />";
     echo "= $akhir2. <br /><br />";
?>

<?php
//------------------------------------------------------------------------------------------- 3. [Inference System] SENI n FISMOT
$q=0;
$pembagi3 = 0;
$bs3  = (($defusenifismot[0][0])*0)+$q;
$dp3  = ((+$defusenifismot[0][1]+$defusenifismot[0][2]+$defusenifismot[0][3]+$defusenifismot[1][0]+$defusenifismot[2][0]+$defusenifismot[3][0])*0.5)+$q;
$ss3 = (($defusenifismot[1][1]+$defusenifismot[1][2]+$defusenifismot[1][3]+$defusenifismot[2][1]+$defusenifismot[2][2]+$defusenifismot[2][3]+$defusenifismot[3][1]+$defusenifismot[3][2]+$defusenifismot[3][3])*1)+$q;
for ($z=0; $z<count($nilfismot); $z++){
    for ($y=0; $y<count($nilseni); $y++){
    $pembagi3 = $pembagi3+$defusenifismot[$z][$y];
        }
    }
    $akhir3 = round(($bs3+$dp3+$ss3)/$pembagi3,2);
     echo  "BS3 = $bs3.<br />" ;
     echo "DP3 = $dp3.<br />";
     echo "SS3 = $ss3.<br />";
     echo "$bs3+$dp3+$ss3<br />";
     echo "dibagi $pembagi3<br />";
     echo "= $akhir3. <br /><br />";
//------------------------------------------------------------------------------------------- 0. Hasil Total [Inference System]
 $akhir = $akhir1+$akhir2+$akhir3 ;
 echo "$akhir1+$akhir2+$akhir3<br /> ";
 echo "TOTAL = $akhir (HASIL)<br />"; 
 // echo "hasil =" .$rekom."<br />";
?>

<?php

     ///////////////////////////////////////..............[RULE BASED SYSTEM]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
     ///////////////////////////////////////..............[RULE BASED SYSTEM]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->
     ///////////////////////////////////////..............[RULE BASED SYSTEM]..............\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\ -->

$min1 = 0;
$min2 = 5.11;
$min3 = 5.75;

$max1 = 5.10;
$max2 = 5.74;
$max3 = "Lebih dari $min3" ;

$batasmin = 3.86;
$batasmax = 6.00;

//range


if ($akhir>= $min1 && $akhir <= $max1){ 
    $rekom='Belum Siap';
}elseif ($akhir>$min2 && $akhir<=$max2){
    $rekom='di Pertimbangkan';
}elseif($akhir > $min3){
    $rekom='Sudah Siap';
}
?>
<!-- 
<br>
nilai akhir= <?php echo $akhir; "<br />"?> -->
<!-- <br> -->
rekomendasi = <?php echo $rekom; ?>
<br />
<style>
    #container {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
}
</style>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<br>
    rendah:<br>
  <input type="text" name="rendah" value="<?php echo $rendahnam; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangnam; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tingginam; ?>"><br>
    sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stingginam; ?>">
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
  <input type="text" name="rendah" value="<?php echo $rendahkog; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangkog; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggikog; ?>"><br>
    sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggikog; ?>">
<div id="kog" style="width: 50%"></div>
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
  <input type="text" name="rendah" value="<?php echo $rendahfismot; ?>"><br>
    sedang:<br>
  <input type="text" name="sedang" value="<?php echo $sedangfismot; ?>"><br>
    tinggi:<br>
  <input type="text" name="tinggi" value="<?php echo $tinggifismot; ?>"><br>
 sangat tinggi:<br>
  <input type="text" name="sangat tinggi" value="<?php echo $stinggifismot; ?>">
<div id="fismot" style="width: 50%"></div>

<script>
//------------------------------------------------------------------------------------------------ 1. Koor [CHART] NAM
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
        data: [[8,0], [9,1], [10.1,1], [10.1,1]]
    }/*, 
    <?php
        echo $titiknam;
    ?> */   
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

//------------------------------------------------------------------------------------------------ 2. Koor [CHART] SOSEM
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
        data: [[0,1], [0,1], [3,1], [4,0]]
    },{ 
        name: 'Sedang',
        data: [[3,0], [5,1], [5,1], [7,0]]
    },{
        name: 'Tinggi',
        data: [[6,0], [7,1], [7,1], [8.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[8,0], [9,1], [10.1,1], [10.1,1]]
    }/*, 
    <?php
        echo $titiksosem;
    ?> */   
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



//------------------------------------------------------------------------------------------------ 3. Koor [CHART] BHS
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
        data: [[0,1], [0,1], [3,1], [4,0]]
    },{ 
        name: 'Sedang',
        data: [[3,0], [5,1], [5,1], [7,0]]
    },{
        name: 'Tinggi',
        data: [[6,0], [7,1], [7,1], [8.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[8,0], [9,1], [10.1,1], [10.1,1]]
    }/*,    
    <?php
        echo $titikbhs;
    ?> */   
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

//------------------------------------------------------------------------------------------------ 4. Koor [CHART] KOG
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
        data: [[0,1], [0,1], [3,1], [4,0]]
    },{ 
        name: 'Sedang',
        data: [[3,0], [5,1], [5,1], [7,0]]
    },{
        name: 'Tinggi',
        data: [[6,0], [7,1], [7,1], [8.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[8,0], [9,1], [10.1,1], [10.1,1]]
    }/*,  
    <?php
        echo $titikkog;
    ?> */   
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

//------------------------------------------------------------------------------------------------ 5. Koor [CHART] SENI
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
        data: [[0,1], [0,1], [3,1], [4,0]]
    },{ 
        name: 'Sedang',
        data: [[3,0], [5,1], [5,1], [7,0]]
    },{
        name: 'Tinggi',
        data: [[6,0], [7,1], [7,1], [8.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[8,0], [9,1], [10.1,1], [10.1,1]]
    }/*,  
    <?php
        echo $titikseni;
    ?> */   
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

//------------------------------------------------------------------------------------------------ 6. Koor [CHART] FISMOT
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
        data: [[0,1], [0,1], [3,1], [4,0]]
    },{ 
        name: 'Sedang',
        data: [[3,0], [5,1], [5,1], [7,0]]
    },{
        name: 'Tinggi',
        data: [[6,0], [7,1], [7,1], [8.5,0]]
    },{
        name: 'Sangat Tinggi',
        data: [[8,0], [9,1], [10.1,1], [10.1,1]]
    }/*, 
    <?php
        echo $titikfismot;
    ?> */   
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

<table border="1px solid">
<!-- ---------------------------------------------------------------------------------- 1. Tabel [Defuzzifikasi] NAM n SOSEM -->
    <tr>
        <td>Defuzzyfikasi NILAI AGAMA dan MORAL + SOSIAL EMOSIONAL </td>
        <td>RENDAH</td>
        <td>SEDANG</td>
        <td>TINGGI</td>
        <td>SANGAT TINGGI</td>
    </tr>
    <tr>
        <td>RENDAH</td>
        <td>Belum Siap (<?php echo $defunamsosem[0][0]; ?>)</td>
        <td>Belum Siap (<?php echo $defunamsosem[0][1]; ?>)</td>
        <td>dp (Belum Siap) (<?php echo $defunamsosem[0][2]; ?>)</td>
        <td>diPertimbangkan (<?php echo $defunamsosem[0][3]; ?>)</td>
    </tr>
    <tr>
        <td>SEDANG</td>
        <td>Belum Siap (<?php echo $defunamsosem[1][0]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defunamsosem[1][1]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defunamsosem[1][2]; ?>)</td>
        <td>dp (sudahs) (<?php echo $defunamsosem[1][3]; ?>)</td>
    </tr>
     <tr>
        <td>TINGGI</td>
        <td>dp (sudahs) (<?php echo $defunamsosem[2][0]; ?>)</td>
        <td>Sudah Siap (<?php echo $defunamsosem[2][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defunamsosem[2][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defunamsosem[2][3]; ?>)</td>
    </tr>
     <tr>
        <td>SANGAT TINGGI</td>
        <td>dp (sudahs) (<?php echo $defunamsosem[3][0]; ?>)</td>
        <td>Sudah Siap (<?php echo $defunamsosem[3][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defunamsosem[3][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defunamsosem[3][3]; ?>)</td>
    </tr>
</table>
<br />

<!-- ---------------------------------------------------------------------------------- 2. Tabel [Defuzzifikasi] BHS n KOG -->
<table border="1px solid">
    <tr>
        <td>Defuzzyfikasi BAHASA + KOGNITIF</td>
        <td>RENDAH</td>
        <td>SEDANG</td>
        <td>TINGGI</td>
        <td>SANGAT TINGGI</td>
    </tr>
    <tr>
        <td>RENDAH</td>
        <td>Belum Siap (<?php echo $defubhskog[0][0]; ?>)</td>
        <td>Belum Siap (<?php echo $defubhskog[0][1]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defubhskog[0][2]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defubhskog[0][3]; ?>)</td>
    </tr>
    <tr>
        <td>SEDANG</td>
        <td>Belum Siap (<?php echo $defubhskog[1][0]; ?>)</td>
        <td>Belum Siap (<?php echo $defubhskog[1][1]; ?>)</td>
        <td>dp (SudahS) (<?php echo $defubhskog[1][2]; ?>)</td>
        <td>dp (SudahS) (<?php echo $defubhskog[1][3]; ?>)</td>
    </tr>
     <tr>
        <td>TINGGI</td>
        <td>di Pertimbangkan (<?php echo $defubhskog[2][0]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defubhskog[2][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defubhskog[2][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defubhskog[2][3]; ?>)</td>
    </tr>
    <tr>
        <td>SANGAT TINGGI</td>
        <td>di Pertimbangkan (<?php echo $defubhskog[3][0]; ?>)</td>
        <td>dp (SudahS) (<?php echo $defubhskog[3][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defubhskog[3][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defubhskog[3][3]; ?>)</td>
    </tr>
</table>
<br />

<!-- --------------------------------------------------------------------------------- 3. Tabel [Defuzzifikasi] SENI n FISMOT -->
<table border="1px solid">
    <tr>
        <td>Defuzzyfikasi SENI + FISIK MOTORIK</td>
        <td>RENDAH</td>
        <td>SEDANG</td>
        <td>TINGGI</td>
        <td>SANGAT TINGGI</td>
    </tr>
    <tr>
        <td>RENDAH</td>
        <td>Belum Siap (<?php echo $defusenifismot[0][0]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defusenifismot[0][1]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defusenifismot[0][2]; ?>)</td>
        <td>di Pertimbangkan (<?php echo $defusenifismot[0][3]; ?>)</td>
    </tr>
    <tr>
        <td>SEDANG</td>
        <td>di Pertimbangkan (<?php echo $defusenifismot[1][0]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[1][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[1][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[1][3]; ?>)</td>
    </tr>
     <tr>
        <td>TINGGI</td>
        <td>di Pertimbangkan (<?php echo $defusenifismot[2][0]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[2][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[2][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[2][3]; ?>)</td>
    </tr>
     <tr>
        <td>SANGAT TINGGI</td>
        <td>di Pertimbangkan (<?php echo $defusenifismot[3][0]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[3][1]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[3][2]; ?>)</td>
        <td>Sudah Siap (<?php echo $defusenifismot[3][3]; ?>)</td>
    </tr>
</table>


<br />
    <table border="1px solid;">
        <tr>
            <td>Nilai Min</td>
            <td>Nilai Max</td>
            <td>Rekomendasi</td>
        </tr>

        <tr>
            <td><?php echo $min1; ?></td>
            <td><?php echo $max1; ?></td>
            <td>Belum Siap</td>
        </tr>

        <tr>
            <td><?php echo $min2; ?></td>
            <td><?php echo $max2; ?></td>
            <td>Dipertimbangkan</td>
        </tr>

        <tr>
            <td><?php echo $min3; ?></td>
            <td><?php echo $max3; ?></td>
            <td>Sudah Siap</td>
        </tr>

    </table>

<br>
nilai akhir= <?php echo $akhir; "<br />"?>
<br>
rekomendasi = <?php echo $rekom; ?>
<br />
<style>
    #container {
    min-width: 310px;
    max-width: 800px;
    height: 400px;
    margin: 0 auto
}
</style>