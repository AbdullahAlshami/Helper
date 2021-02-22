<?php
	include('connect.php');
	session_start();
	
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=$_POST['username'];
		

			
		$fusername=$username;
		
		$password = $_POST["password"];
		$fpassword=$password;
		
		$query=mysqli_query($conn,"select * from `users` where (username='$fusername' OR email='$fusername')  and password='$fpassword'");
		
		if(mysqli_num_rows($query)==0){
			$_SESSION['msg'] = "Login Failed, Invalid Input!";
			header('location: LoginDonor.php');
		}
		else{
			
			$row=mysqli_fetch_array($query);
			if ($row['access']==0){
				$_SESSION['id']=$row['user_id'];
				$_SESSION['name']=$row['name'];
				$_SESSION['status']=true;
				$_SESSION['admin']=true;
				?>
				<script>
					window.alert('Login Success, Welcome Admin!');
					window.location.href='add-post.php';
				</script>
				<?php
			}
			elseif ($row['access']==1){
				$_SESSION['id']=$row['user_id'];
								$_SESSION['name']=$row['name'];

				$_SESSION['status']=true;
				?>
				<script>
					window.alert('Login Success, Welcome User!');
					window.location.href='home.php';
				</script>
				<?php
			}
			
		
				
		}
		
		}
	
?>