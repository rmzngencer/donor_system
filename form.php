<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/f448165fcc.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}
      
      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }
      
      input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: #45a049;
      }
      
      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
      #have{
        margin: 5px;
      }
      form{
        margin-left: 500px;
        margin-right: 500px;
      }
      h3{
        text-align: center;
      }
      </style>
    <title>Blood Donation System</title>
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
    <section id="Login">
      
      <div id="opaque">
        <div id="formgroup">
          <h3>Membership Form</h3>







<form  method="POST"  action="" >
    <label for="lname">Id number</label>
    <input type="text"  name="D_Tc" required  placeholder="Your Id number..">
    <label for="fname">First Name</label>
    <input type="text" name="D_FirstName" required placeholder="Your name..">
    <label for="lname">Last Name</label>
    <input type="text" name="D_LastName" required  placeholder="Your last name..">
    <label for="lname">Phone Number</label>
    <input type="text"   name="D_PhoneNo" required  placeholder="Your Phone Number..">
    <label for="lname">Birth Day</label>
    <input type="text" name="D_TcBirthday"  required  placeholder="Your birth date..">  
    <label for="lname">City</label>
    <input type="text"  name="D_City"   required placeholder="Your City..">
    <label for="lname">Town</label>
    <input type="text"  name="D_Town" required placeholder="Your Town..">
    <label for="gender">Gender</label>
    <select  name="D_TcGender">
      <option value="man">...</option>
      <option value="woman">Women</option>
      <option value="man">Men</option>
    </select>
    <label for="gender" >Blood Group</label>
    <select  name="BloodGroup">
      <option value="man">...</option>
      <option value="A Rh+">A Rh+</option>
      <option value="A Rh-">A Rh-</option>
      <option value="B Rh+">B Rh+</option>
      <option value="B Rh-">B Rh-</option>
      <option value="AB Rh+">AB Rh+</option>
      <option value="AB Rh-">AB Rh-</option>
      <option value="0 Rh+">0 Rh+</option>
      <option value="0 Rh-">0 Rh-</option>
     
    </select>

    <label for="subject">Full Adress</label>
    <input type="text"  name="D_FullAdrs" required placeholder="Your Tadresser own..">
    <label for="subject">what time you donated</label>
    <input type="text"  name="D_Date" required placeholder="Your Tadresser own..">
    <label for="subject">where do you donated</label>
    <select  name="CID">
      <option value="1050039762">istanbul</option>
      <option value="1177210497">sağlık</option>
      <option value="1285111091">ankara</option>
      <option value="1389296241">eskişehir</option>
      <option value="1445061492">izmir</option>
      <option value="1642151119">bursa</option>
      <option value="1807585717">samsun</option>
      <option value="1820521971">şanlıurfa</option>
      <option value="1983315711">kayseri</option>
      <option value="2000522532">konya</option>
      <option value="2004259211">antalya</option>
      <option value="2007010195">sivaas</option>
     
    </select>
      <input type="submit" name="ekle"><br>
    
  </form>
  <?php
  include("baglanti.php");
  if (isset($_POST["ekle"])){

   

    //$sec="select CID FROM blood_center where B_Name='".$_POST["B_Name"]."'";
    //$result=$baglan->query($sec);
    //$cek=$result->fetch_assoc();
    
      

      $ekli ="insert into donor(D_Tc,D_TcGender,D_TcBirthday,D_City,D_Town,D_FullAdrs,D_PhoneNo,D_FirstName,D_LastName) values
      ('".$_POST["D_Tc"]."','".$_POST["D_TcGender"]."','".$_POST["D_TcBirthday"]."','".$_POST["D_City"]."','".$_POST["D_Town"]."','".$_POST["D_FullAdrs"]."','".$_POST["D_PhoneNo"]."','".$_POST["D_FirstName"]."','".$_POST["D_LastName"]."')";


      $ekle2="insert into blood(D_Tc,BloodGroup,D_Date,CID) values
      ('".$_POST["D_Tc"]."','".$_POST["BloodGroup"]."','".$_POST["D_Date"]."','".$_POST["CID"]."')";


       $sonuc=mysqli_query($baglan,$ekli);
       $sunuc2=mysqli_query($baglan,$ekle2);     

       if($sonuc){
         if($sunuc2){
          echo "<center>Registration Successful.</center>";
         
         }else{
          echo "form.php if else hatası sonuc2 için";
         }
           
       }else{
           echo "form.php if else hatası sonuc için";
       }   
  }
 
  ?>
       
          </div>
        </div>

      </div>

    </section>
   
  </body>
</html>
