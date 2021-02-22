<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=divce-width , initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Helper-Admain</title>
        <!---Google Material Icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
         rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> 
         <!--fontAwesome-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <!---CSS File -->
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <body>
        <!--Navbar-->
        <nav>
            <div class="nav-wrapper   grey " >
                <a href="#" class="brand-logo left"><span class="red">H</span>epler</a>
                <a href="#" class="right hide-on-larg-only sidenav-trigger" data-target="slide-out"  ><i class="fas fa-bars"></i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="home.php">Home</a></li>
					
					 <?php	session_start();

													if(isset($_SESSION['admin']))
													{

														echo '<li><a href="add-post.php">Add Post</a></li>';
													}
													else
													{
														echo '<li><a href="home.php">Post</a></li>';
													}
											?>
					
                    <li><a href="about.php">About</a></li>
					<?php	

													if(isset($_SESSION['status']))
													{

														echo '<li><a href="logout.php">Logout</a></li>';
													}
													else
													{
														echo '<li><a href="LoginDonor.php">Login</a></li>';
													}
											?>
                </ul>
            </div>
        </nav>
        <ul id="slide-out" class="sidenav">
            <li><a href="home.php">Home</a></li>
 <?php	session_start();

													if(isset($_SESSION['admin']))
													{

														echo '<li><a href="add-post.php">Add Post</a></li>';
													}
													else
													{
														echo '<li><a href="home.php">Post</a></li>';
													}
											?>            <li><a href="about.php">About</a></li>
<?php
													if(isset($_SESSION['status']))
													{

														echo '<li><a href="logout.php">Logout</a></li>';
													}
													else
													{
														echo '<li><a href="LoginDonor.php">Login</a></li>';
													}
											?>
        </ul>