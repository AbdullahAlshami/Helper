<?php
include ('connect.php');
include ('header1.php');

	
	if (isset($_SESSION['id'])){
		$query=mysqli_query($conn,"select * from users where user_id='".$_SESSION['id']."'");
		$row=mysqli_fetch_array($query);	
		if ($row['access']==1){
			header('location:home.php');
		}
	}

if(isset($_POST["input-title"]) && trim($_POST["input-post"]) != ""){
    $title = $_POST['input-title'];
$post = $_POST['input-post'];
$send = $_POST['input-send'];
    $query ="INSERT INTO post (title , post) VALUES('$title' ,'$post')";
    mysqli_query($conn , $query);
    echo"Post Published SuccessFully";
}
?>

        <!--addpost-->
        <link rel="shortcut icon" href="img1/logo-icon.png">
        <div class="add-post">
            <div class="container">
                <h4>Add Post</h4>
                <form action="#" method="POST">
                <label>Title</label>
                <input type="text" placeholder="Enter a Title" name="input-title" name="input-title" required="required">
                <label>Post</label>
                <input type="text" placeholder="Enter a Post" name="input-post" name="input-post" required="required">
                <a><button   type="submit" class="btn grey" name="input-send" name="input-send">Post</button></a>

                </form>
            </div>
        </div>

        <!---Jquery-->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(document).ready(function(){
            $('.sidenav').sidenav();
             });
        </script>

    </body>
</html>