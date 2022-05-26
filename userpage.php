<?php

include("baglanti.php");
ob_start();
session_start();

if(!isset($_SESSION["login"])){
header("Location:index.php");

}
else {

$did=$_SESSION["pass"];

$gencder= $_SESSION["D_TcGender"];
$bday =$_SESSION["D_TcBirthday"];
$city = $_SESSION["D_City"];
$town = $_SESSION["D_Town"];
$adrs = $_SESSION["D_FullAdrs"];
$phone = $_SESSION["D_PhoneNo"];
$name = $_SESSION["D_FirstName"];
$lastname = $_SESSION["D_LastName"];
echo $did;
echo "<center>Welcome to the user page..! ";
echo "<a href=logout.php>sing out</a></center>";

}








  
  if (isset($_POST["guncelle"])){
    //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
    //$result=$baglan->query($sec);
    //$cek=$result->fetch_assoc();
      echo "butona basıldı";


      $guncel ="update donor
      set D_PhoneNo = '".$_POST["D_PhoneNo"]."'
      where D_Tc = '".$did."';";

       $sonucu=mysqli_query($baglan,$guncel);   
       if($sonucu){
           echo"veri güncellendi";
       }else{
           echo "güncelleme hatası";
       }   
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
      <button class="tablink" onclick="openPage('Yourinformation', this, 'blue')"id="defaultOpen">Your information</button>
      <button class="tablink" onclick="openPage('Hospital', this, 'red')">past donation info</button>
      

<div id="Yourinformation" class="tabcontent">
  <h3>Your information</h3>
  <table>
    <tr>
      <th>Your ID</th>
      <th>Your Name</th>
      <th>Your Last Name</th>
      <th>Your Phone</th>
      <th>Your Gender</th>
      <th>Your Birth Day</th>
      <th>city</th> 
      <th>Town</th> 
      <th>Adresses</th> 
    </tr>

    <?php
  include("baglanti.php");
        echo"

        <tr>
            <td>".$did."</td>
            <td>".$name."</td>
            <td>".$lastname."</td>
            <td>".$phone."</td>
            <td>".$gencder."</td>
            <td>".$bday."</td>
            <td>".$city."</td>
            <td>".$town."</td> 
            <td>".$adrs."</td>        
        </tr>
        ";
  ?>
  </table>

  <form  method="POST"  action="" >
    <label for="lname">New phone no</label>
    <input type="text"  name="D_PhoneNo" required  placeholder="New phone no">
    <input type="submit" name="guncelle"><br>
</form>
</div>


<div id="Hospital" class="tabcontent">
  <h3>past sonatation info</h3>
  <table>
    <tr>
      <th>Your ID</th>
      <th>Your Name</th>
      <th>Your Last Name</th>
      <th>Your Phone</th>
      <th>Donation Date</th>
      <th>Center Name</th>
      <th>Center city</th> 
    </tr>
    <?php
  include("baglanti.php");
  

  $sec="select * from (donor, blood, blood_center) where donor.D_Tc = blood.D_Tc AND blood.CID= blood_center.CID AND donor.D_Tc='".$did."' limit 1";
  $sonuc=$baglan->query($sec);
  if($sonuc->num_rows>0){
      while($cek=$sonuc->fetch_assoc()){
          echo"
          <tr>
              <td>".$cek['D_Tc']."</td>
              <td>".$cek['D_FirstName']."</td>
              <td>".$cek['D_LastName']."</td>
              <td>".$cek['D_PhoneNo']."</td>
              <td>".$cek['D_Date']."</td>
              <td>".$cek['B_Name']."</td>
              <td>".$cek['B_City']."</td>

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
