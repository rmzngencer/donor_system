<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sife="";
$vt_adi="donationcenter";
$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, 
$vt_sife, $vt_adi);


if(!$baglan){
    die("connection pf database error".msqli_error());  
}

?>