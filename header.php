<header>
    <div class="logo">
      <h1 class="logo-text"><span>H</span>elper</h1>
    </div>
                 <i class="fa fa-bars menu-toggle"></i>
    <ul class="nav">
      <li><a href="index4.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="index4.php">Services</a></li>
      <!-- <li><a href="#">Sign Up</a></li>
      <li><a href="#">Login</a></li> -->
	  <?php	session_start();

													if(isset($_SESSION['status']))
													{

														echo '<li><a href="logout.php">Logout</a></li>';
													}
													else
													{
														echo '<li><a href="LoginDonor.php">Login</a></li>';
													}
											?>
	  
  </header>