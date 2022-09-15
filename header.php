<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">  
  </head>
    <style>
      .header{
        box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
        background-color:#f8f9fa;
      }
      .heading{
        color:red;
      }
    </style>
<body>
<nav class="navbar navbar-expand-lg navbar-light sticky-top header">
  <a class="navbar-brand mr-auto mt-1" href="#"> <i class="fas fa-utensils heading"></i>Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
   <ul class="navbar-nav mr-auto"></ul>
   <div class="mt-1">
      <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link " href="home.php">Home</a>
            </li>   
      </ul>
   </div> 
   <div class="mt-1">
      <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link heading" href="index.php">Menu</a>
            </li>   
      </ul>
   </div>   
   <div class="mr-2 mt-1">
    <?php 
    $count= 0;
    if(isset($_SESSION['cart'])){
      $count = count($_SESSION['cart']);
    }
    ?>
    <a href="mycart.php" class="text-dark">Cart (<?php echo $count; ?>)</a> 
  </div>
   <div class="mt-1">
      <?php 
        $userName = "";
          if(isset($_SESSION['logged_in'])){
            $userName = $_SESSION['username'];
          }
      ?>
      <form action="logout.php" method="POST">
              <button type="submit" name="logout" class="btn btn-outline-info"><?php echo $userName;?> - Logout</button>    
      </form>
   </div>
  </div>
</nav>  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>