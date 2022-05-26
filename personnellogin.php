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
    <title>Blood Donation System</title>
    <style>
      body {font-family: Arial, Helvetica, sans-serif;}
      form {border: 3px solid #f1f1f1;}
      
      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }
      
      button {
        background-color: #fca311;
        
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }
      
      button:hover {
        opacity: 0.8;
      }
      
     
      .imgcontainer {
        text-align: center;
        margin: 24px 0 12px 0;
      }
      
      img.avatar {
        width: 40%;
        border-radius: 50%;
      }
      
      .container {
        padding: 16px;
      }
      
      span.psw {
        float: right;
        padding-top: 16px;
      }
      
      h2{
        text-align: center;
      }
      form{
        margin-left: 500px;
        margin-right: 500px;
      }
      #have{
        font-size: 15px;
      }
      #loginbutton{
      font-size: 20px;
      
        
      }
      /* Change styles for span and cancel button on extra small screens */
      @media screen and (max-width: 300px) {
        span.psw {
           display: block;
           float: left;
        }
       
      }
      </style>
  </head>
  <body >
    <section id="menu">
      <div id="logo">Blood Donation</div>
      <nav>
        <a href="home.php"><i class="fa-solid fa-house ikon"></i>Home</a>
        <a href="form.php"><i class="fa-solid fa-droplet ikon"></i></i></i>Quick Donate</a>
        <a href="userlogin.php"><i class="fa-solid fa-arrow-right-to-bracket ikon"></i>Login</a>
        <a href="communication.php"><i class="fa-solid fa-address-book ikon"></i></i></i>Communication</a>
      </nav>
    </section><body>

      <h2>Welcome </h2>
      
      <form action="login.php" method="POST" >
        <div class="imgcontainer">
          <img src="img/personnel-vector-28420771.png" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
              
          <button type="submit" name="buttom">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
       
        </div>
        <div class="container" style="background-color:#f1f1f1">
        </div>
      </form>

      </body>
    
    <footer >
      2022 &copy; All rights reserved. Ramazan Gencer  and  Adem Doğan
    </footer>
  </body>
</html>
