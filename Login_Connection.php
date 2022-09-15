<?php 
    $con = mysqli_connect("localhost:1000","root","root","test");
    if(mysqli_connect_error()){
        echo "<script>alert('cannot connect to the database')</script>";
        exit();
    }


?>