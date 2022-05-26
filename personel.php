


<?php

include("baglanti.php");
ob_start();
session_start();

$id=$_SESSION["P_Tc"];

$name  =$_SESSION["P_FirstName"]; 
$lastname = $_SESSION["P_LastName"] ;
$phone = $_SESSION["P_PhoneNo"] ;
$position = $_SESSION["P_Position"] ;
$birth = $_SESSION["P_Birtday"] ;
$salary  =$_SESSION["P_Salary"] ;


if(!isset($_SESSION["login"])){
header("Location:index.php");

}
else {
echo $id;
echo "<center>Welcome to the admin page..!";
echo "<a href=logout.php>sign out</a></center>";

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/f448165fcc.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <style>
      * {box-sizing: border-box}
      
      /* Set height of body and the document to 100% */
      body, html {
        height: 100%;
        margin: 0;
        font-family: Arial;
      }
      
      /* Style tab links */
      .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 20%;
      }
      
      .tablink:hover {
        background-color: #777;
      }
      
      /* Style the tab content (and add height:100% for full page content) */
      .tabcontent {
        color: rgb(230, 16, 16);
        display: none;
        padding: 100px 20px;
        height: 100%;
      }
      
      table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
      }

      th, td {
      text-align: left;
      padding: 16px;
      }

      tr:nth-child(even) {
      background-color: #f2f2f2;
      }
      
      </style>

    
    

    <title>>Blood Donation System</title>
  </head>
  <body>
    <section id="menu">
      <div id="logo">Blood Donation</div>
      <nav>
        <a href="home.php"><i class="fa-solid fa-house ikon"></i>Home</a>
        <a href="form.php"><i class="fa-solid fa-droplet ikon"></i></i></i>Quick Donate</a>
        <a href="userlogin.php"><i class="fa-solid fa-arrow-right-to-bracket ikon"></i>Login</a>
        <a href="communication.php"><i class="fa-solid fa-address-book ikon"></i></i></i>Communication</a>
      </nav>
    </section>




    <section>
      <button class="tablink" onclick="openPage('Yourinformation', this, 'black')"id="defaultOpen">Your information</button>
      <button class="tablink" onclick="openPage('Hospital', this, 'red')">Hospital</button>
      <button class="tablink" onclick="openPage('Donor', this, 'green') ">Donor</button>
      <button class="tablink" onclick="openPage('BloodCenter', this, 'blue')">Blood Center</button>
      <button class="tablink" onclick="openPage('Personnel', this, 'orange')">Personnel</button>
      
     


<div id="Yourinformation" class="tabcontent">
  <h3>Your information</h3>
  <table>
    <tr>
      <th>Your ID</th>
      <th>Your Name</th>
      <th>Your Last Name</th>
      <th>Your Phone</th>
      <th>Your Position</th>
      <th>Your Birth Day</th>
      <th>Your Salary</th> 
    </tr>
    <?php
  include("baglanti.php");
        echo"

        <tr>
            <td>".$id."</td>
            <td>".$name."</td>
            <td>".$lastname."</td>
            <td>".$phone."</td>
            <td>".$position."</td>
            <td>".$birth."</td>
            <td>".$salary."</td>       
        </tr>
        ";
  ?>
  </table> 
</div>




<div id="Hospital" class="tabcontent">
  <h3>Hospital</h3>
  <table>
    <tr>
      <th>hospital ID</th>
      <th>hospital Name</th>
      <th>hospital city</th>
      <th>hospital town</th>
      <th>hospital adresses</th>
    </tr>
    <?php
include("baglanti.php");
$sec="select * from hospital";
$sonuc=$baglan->query($sec);
if($sonuc->num_rows>0){
    while($cek=$sonuc->fetch_assoc()){
        echo"
        <tr>
            <td>".$cek['HID']."</td>
            <td>".$cek['H_Name']."</td>
            <td>".$cek['H_City']."</td>
            <td>".$cek['H_Town']."</td>
            <td>".$cek['H_FullAdrs']."</td>  
        </tr>
        ";
    }
}
else{
    echo"veri tabanı boş";
}
?>
  </table> 
</div>



<div id="Donor" class="tabcontent">
  <h3>Donor</h3>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Gender</th>
      <th>Birth day</th>
      <th>City</th>
      <th>Town</th>
      <th>Phone No</th>
      
      
    </tr>
    <?php
include("baglanti.php");

$secdonor="select * from donor";
$sonucdonor=$baglan->query($secdonor);

if($sonucdonor->num_rows>0){
    while($cekdonor=$sonucdonor->fetch_assoc()){
        echo"

        <tr>
            <td>".$cekdonor['D_FirstName']."</td>
            <td>".$cekdonor['D_LastName']."</td>
            <td>".$cekdonor['D_TcGender']."</td>
            <td>".$cekdonor['D_TcBirthday']."</td>
            <td>".$cekdonor['D_City']."</td>
            <td>".$cekdonor['D_Town']."</td>
            <td>".$cekdonor['D_PhoneNo']."</td>
            
            
            
            
        </tr>

        ";

    }

}
else{
    echo"veri tabanı boş";

}

?>
  </table>
  </table> 
</div>

<div id="BloodCenter" class="tabcontent">
  <h3>Blood Center</h3>
  <table>
    <tr>
      <th>Center ID</th>
      <th>Number of personel</th>
      <th>Name</th>
      <th>City</th>
      <th>Town</th>
      <th>Full adresses</th>
      <th>Capasity</th>
      
      
    </tr>
    <?php
include("baglanti.php");

$secbloodcente="select * from blood_center";
$sonucbloodcente=$baglan->query($secbloodcente);

if($sonucbloodcente->num_rows>0){
    while($cekbloodcente=$sonucbloodcente->fetch_assoc()){
        echo"
        <tr>
            <td>".$cekbloodcente['CID']."</td>
            <td>".$cekbloodcente['NumberPersonel']."</td>
            <td>".$cekbloodcente['B_Name']."</td>
            <td>".$cekbloodcente['B_City']."</td>
            <td>".$cekbloodcente['B_Town']."</td>
            <td>".$cekbloodcente['B_FullAdrs']."</td>
            <td>".$cekbloodcente['NumberBeds']."</td>
              
        </tr>
        ";
    }
}
else{
    echo"veri tabanı boş";
}
?>
  </table>
</div>
<div id="Personnel" class="tabcontent">
  <h3>Personnel</h3>
  <table>
    <tr>
      <th>Personnel First Name</th>
      <th>Personnel Last Name</th>
      <th>Personnel Phone</th>
      <th>Personnel Position</th>
      <th>Personnel Birth Day</th>
      <th>Personnel Salary</th>

    </tr>
    <?php
include("baglanti.php");

$secpersonel="select * from personnel";
$sonucpersonel=$baglan->query($secpersonel);

if($sonucpersonel->num_rows>0){
    while($cekpersonel=$sonucpersonel->fetch_assoc()){
        echo"
        <tr>
            <td>".$cekpersonel['P_FirstName']."</td>
            <td>".$cekpersonel['P_LastName']."</td>
            <td>".$cekpersonel['P_PhoneNo']."</td>
            <td>".$cekpersonel['P_Position']."</td>
            <td>".$cekpersonel['P_Birtday']."</td>
            <td>".$cekpersonel['P_Salary']."</td>
              
        </tr>
        ";
    }
}
else{
    echo"veri tabanı boş";
}
?>
  </table>
</div>



<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

    </section>

    <footer >
      2022 &copy; All rights reserved. Ramazan Gencer  and  Adem Doğan
    </footer>

      



  </body>
</html>
