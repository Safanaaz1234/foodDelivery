<?php  require('Login_Connection.php'); 
  session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .header{
            background-color:#f8f9fa;
            display:flex;
            flex-direction:row;
            justify-content:flex-end;
        }
        .btn{
            border:none;
            outline:none;
            padding:10px 15px;
            margin:10px;
            border-radius:5px;
            background:linear-gradient(to right,#ff7165,#ff7165);
            color:white;
        }
        .link-to-register{
            margin-top:5%;
            color:grey;
        }
        .link-to-register > a{
            text-decoration:none;
            color:#ff7165;
        }
    </style>
</head>
<body>
<div class="header">
        <a href="userlogin.php"><button class="btn">User-Login</button></a>
        <a href="adminlogin.php"><button class="btn">Admin-Login</button></a>
</div>

<div class="container">
        <div class="myform">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <h2>USER LOGIN</h2>
                <input type="text" placeholder="Username or E-mail" name="email_username">
                <input type="password" placeholder="Password" name="password">
                <button type="submit" name="user-login">LOGIN</button>
                <h5 class="link-to-register">Don't have an account? <a href="user_register.php">Register</a></h5>
            </form>
        </div>
       
    </div>

 <?php 
    if(isset($_POST['user-login'])){
        $query = "SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
        $result=mysqli_query($con,$query);
        if($result){
            if(mysqli_num_rows($result)==1){
                $result_fetch = mysqli_fetch_assoc($result);
                if(password_verify($_POST['password'],$result_fetch['password'])){
                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    header("location:home.php");
                }
                else{
                    echo "
                        <script>
                            alert('Incorrect Password');
                        </script>
                    ";
                }
            }
            else{
                echo "
                    <script>
                        alert('Email or Username not registered');
                    </script>
                ";
            }
        }
        else{
            echo "
                <script>
                    alert('Cannot Run Query');
                </script>
            ";
        }

    }
 
 ?>   
</body>
</html>