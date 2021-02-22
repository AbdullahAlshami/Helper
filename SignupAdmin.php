<?php
include ('connect.php');
include ('header1.php');
?>
<html lang="en">

<head>
<link rel="shortcut icon" href="img1/logo-icon.png">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--------------------------------------- Font Awesome ------------------------------------------------->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!------------------------------------- Google Fonts -------------------------------------------->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!----------------------------------- Custom Styling ------------------------------------------------------------------>
  <link rel="stylesheet" href="Style2.css">

  <title>SignUpDonor</title>
</head>

<body>
  <header>
    <div class="logo">
      <h1 class="logo-text"><span></span></h1>
    </div>
    <i class="fa fa-bars menu-toggle"></i>
   
  </header>

  <div class="auth-content">

	<form method="POST" action="process_register.php">
      <h2 class="form-title">SignUp Admin</h2>

      <!-- <div class="msg error">
        <li>Username required</li>
      </div> -->

<div> <input type="hidden" id="priv" name="priv" value="1">

        <label>Name</label>
        <input type="text" name="name" class="text-input">
      </div>


      <div>
        <label>Username</label>

        <input type="text" name="username" class="text-input">
      </div>
      <div>
        <label>AdminName</label>
        <input type="text" name="AdminName" class="text-input">
      </div>
      <div>
        <label>Email</label>
        <input type="email" name="email" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" class="text-input">
      </div>
      <div>
        <label>Password Confirmation</label>
        <input type="password" name="passwordConf" class="text-input">
      </div>
      <div>
        <button type="submit" name="register-btn" class="btn btn-big">Register</button>
      </div>
      <p>Or <a href="LoginDonor.php">LogIn</a></p>
    </form>

  </div>


  <!-------------------------------------------- JQuery --------------------------------------------------->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!------------------------------ Custom Script ---------------------------------------------------------->
  <script src="Script.js"></script>

</body>

</html>