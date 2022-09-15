<?php
require("Connection.php");
 session_start();
 session_regenerate_id(true);
 if(!isset($_SESSION['AdminLoginId'])){
    header("location: adminlogin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body{
            margin: 0;
        }
        div.header{
            color: #1c1c1e;
            display: flex;
            flex-direction:row;
            align-items:center;
            justify-content:space-between;
            padding:0 60px;
            background-color: #f8f9fa;
        }

        div.header button{
            background-color:#f8f9fa;
            font-size:16px;
            font-weight:550;
            padding:8px 12px;
            border:2px solid #1c1c1e;
            border-radius:5px;
        }
        div.header button:hover{
            background-color:#1c1c1e;
            color:white;
        }
       .data{
        background-color:#e9f4ff;
       }

    </style>
</head>
<body>
    <div class="header">
        <h1>ADMIN PANEL - <?php echo $_SESSION['AdminLoginId'] ?></h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <button type="submit" name="Logout">LOG OUT</button>
        </form>
    </div>


    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
            <table class="table data">
                <thead>
                    <tr>
                        <th scope="col">Order Id</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Phone No.</th>
                        <th scope="col">Address</th>
                        <th scope="col">Pay Mode</th>
                        <th scope="col">Orders</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $query = "SELECT * FROM `order_manager`";
                     $user_result = mysqli_query($con,$query);
                     while($user_fetch = mysqli_fetch_assoc($user_result)){
                        echo "
                        <tr>
                            <td>$user_fetch[Order_Id]</td>
                            <td>$user_fetch[Full_Name]</td>
                            <td>$user_fetch[Phone_No]</td>
                            <td>$user_fetch[Address]</td>
                            <td>$user_fetch[Pay_Mode]</td>
                            <td>
                                <table class='table data'>
                                    <thead>
                                        <tr>
                                            <th scope='col'>Item Name</th>
                                            <th scope='col'>Price</th>
                                            <th scope='col'>Quantity</th>
                                        </tr>
                                    </thead>
                                <tbody>
                            ";
                           $order_query = "SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
                           $order_result=mysqli_query($con,$order_query);
                           while($order_fetch=mysqli_fetch_assoc($order_result)){
                            echo "
                             <tr>
                                    <td>$order_fetch[Item_Name]</td>
                                    <td>$order_fetch[Price]</td>
                                    <td>$order_fetch[Quantity]</td>
                             </tr>
                            ";
                           }
                    echo "  
                                </tbody>
                            </table>
                        </td>
                    </tr>";
                        
                     }
                    ?>
                    
                    
                </tbody>
            </table>
            </div>
        </div>
    </div>



<?php
 if(isset($_POST['Logout'])){
    
    session_destroy();
    // header("location: adminlogin.php");
 }
?>
</body>
</html>