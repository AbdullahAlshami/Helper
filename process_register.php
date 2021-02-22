<?php
	require('connect.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		
		
	
		
	
		if(is_numeric($_POST['name']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:SignupDonor.php?error=".$msg);
		}
		else
		{
			$name=$_POST['name'];
			$username=$_POST['username'];

			$email=$_POST['email'];
			$psw=$_POST['password'];
             $gender  =$_POST['password'];
			
			$acces=$_POST['priv'];
			
			
			
		
			
			$query="insert into users(name,username,email,password,access)
			values('$name','$username','$email','$psw',$acces)";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:LoginDonor.php");
		}
	}
	else
	{
		
	}
?>