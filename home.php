<?php
include ('connect.php');
include ('header1.php');
$query= 'SELECT * FROM post';
$result = mysqli_query($conn , $query);
if(isset($result)){

    while($row = mysqli_fetch_assoc($result)){?>

    <div class="article">
        <div class="container">
        <h5><a href="post.php?id=<?php echo$row['id']?>"><?php echo $row['title'];?></a></h5>
        <p><?php echo $row['post'];?></p>
        <a href="post.php?id=<?php echo$row['id']?>"><button>Read More</button></a>

        </div>
    </div>
<?php

    }
}

?>

        <!---Jquery-->
        <link rel="shortcut icon" href="img1/logo-icon.png">
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