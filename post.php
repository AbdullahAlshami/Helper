<?php
include ('connect.php');
include ('header1.php');


$id = $_GET['id'];
$query = 'SELECT * FROM post WHERE id =' .$id;
$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);

?>
 <div class="article">
        <div class="container">
        <h5><?php echo $row['title'];?></h5>
        <p><?php echo $row['post'];?></p>
        

        </div>
    </div>
    <link rel="shortcut icon" href="img1/logo-icon.png">
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