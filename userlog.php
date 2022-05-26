<?php

include("baglanti.php");
ob_start();
session_start();

$kadi = $_POST['username'];
$sifre = $_POST['password'];

$sql_check = "select * from donor where D_PhoneNo='".$kadi."' and D_Tc='".$sifre."' " or die(mysql_error());
$sonuc=$baglan->query($sql_check);
if($sonuc->num_rows>0) {


$_SESSION["login"] = "true";
$_SESSION["user"] = $kadi;
$_SESSION["pass"] = $sifre;
header("Location:userpage.php");

while($cek=$sonuc->fetch_assoc()){

    
    $_SESSION["D_TcGender"] = $cek["D_TcGender"];
    $_SESSION["D_TcBirthday"] = $cek["D_TcBirthday"];
    $_SESSION["D_City"] = $cek["D_City"];
    $_SESSION["D_Town"] = $cek["D_Town"];
    $_SESSION["D_FullAdrs"] = $cek["D_FullAdrs"];
    $_SESSION["D_PhoneNo"] = $cek["D_PhoneNo"];
    $_SESSION["D_FirstName"] = $cek["D_FirstName"];
    $_SESSION["D_LastName"] = $cek["D_LastName"];
}

}
else {
if($kadi=="" or $sifre=="") {
echo "<center>Please do not leave the username or password blank..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
}
else {
echo "<center>Incorrect Username/Password.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
}
}

ob_end_flush();
?>