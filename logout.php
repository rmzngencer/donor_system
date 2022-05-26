<?php
session_start();
ob_start();
session_destroy();
echo "<center>You have logged out. You are being redirected to the main page.</center>";
header("Refresh: 2; url=home.php");
ob_end_flush();
?>