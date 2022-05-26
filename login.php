<?php

include("baglanti.php");
ob_start();
session_start();

$kadi = $_POST['username'];
$sifre = $_POST['password'];

$sql_check = "select * from personnel where P_PhoneNo='".$kadi."' and P_Tc='".$sifre."' " or die(mysql_error());
$sonuc=$baglan->query($sql_check);
if($sonuc->num_rows>0) {


$_SESSION["login"] = "true";
$_SESSION["user"] = $kadi;
$_SESSION["pass"] = $sifre;
header("Location:personel.php");

while($cek=$sonuc->fetch_assoc()){
    $_SESSION["P_Tc"] = $cek["P_Tc"];
    $_SESSION["P_FirstName"] = $cek["P_FirstName"];
    $_SESSION["P_LastName"] = $cek["P_LastName"];
    $_SESSION["P_PhoneNo"] = $cek["P_PhoneNo"];
    $_SESSION["P_Position"] = $cek["P_Position"];
    $_SESSION["P_Birtday"] = $cek["P_Birtday"];
    $_SESSION["P_Salary"] = $cek["P_Salary"];
    

}

}
else {
if($kadi=="" or $sifre=="") {
echo "<center>please correct them <a href=javascript:history.back(-1)>Geri Don</a></center>";
}
else {
echo "<center>please carrect them<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
}
}

ob_end_flush();
?>