<?php  require('Login_Connection.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Register</title>
    <link rel="stylesheet" href="style.css">
    <style>
         body{
            background:linear-gradient(to right,#ff7165,#ffb65d);
         }
        .link-to-login{
            margin-top:5%;
            color:grey;
        }
        .link-to-login > a{
            text-decoration:none;
            color:#ff7165;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="myform">
            <form  name="f1" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
                <h2>USER REGISTER</h2>
                <input type="text" placeholder="Full Name" name="fullname" required>
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit" name="user-register" style="padding:8px 100px;">REGISTER</button>
                <h5 class="link-to-login">Already have an account? <a href="userlogin.php">Login</a></h5>
            </form>
        </div>
       
    </div>



<?php
    if(isset($_POST['user-register'])){
        $user_exist_query="SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
        $result = mysqli_query($con,$user_exist_query);
        if($result){
            if(mysqli_num_rows($result) > 0)
            {
                $result_fetch=mysqli_fetch_assoc($result);
                if($result_fetch['username']==$_POST['username']){
                    echo "
                        <script>
                            alert('$result_fetch[username] -Username already exists');
                            window.location.href='user_register.php';
                        </script>
                    ";
                }
                else{
                    echo "
                        <script>
                            alert('$result_fetch[email] - Email already registered');
                            window.location.href='user_register.php';
                        </script>
                    ";
                }

            }
            else{ 
                if($_POST['username']==" " || $_POST['password']==" "){
                    echo "
                        <script>
                            alert('Please input a valid username or password');
                            window.location.href='user_register.php';
                        </script>
                    ";
                }
                elseif( strlen($_POST['username'])<8 || strlen($_POST['password'])<8) {
                    echo "
                        <script>
                            alert('Please enter a strong username or password');
                            window.location.href='user_register.php';
                        </script>
                    ";
                }
                else{
                $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
                $query = "INSERT INTO `registered_users`(`full_name`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$password')";
                if(mysqli_query($con,$query)){
                    echo "
                        <script>
                            alert('Registration Successful');
                            window.location.href='userlogin.php';
                        </script>
                    ";

                }
                else{
                    echo "
                        <script>
                            alert('Cannot Run Query');
                            window.location.href='user_register.php';
                        </script>
                    ";
                }
            }
            }
        }
        else{
            echo "
                <script>
                    alert('Cannot Run Query');
                    window.location.href='user_register.php';
                </script>
            ";
        }
    }
?>


</body>
</html>