<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container md-5 my-5">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/Latte.jpeg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Latte</h5>
                        <span class="card-text">Price:Rs.130  </span>
                        <input type="hidden" name="Item_Name" value="Latte"/>
                        <input type="hidden" name="Price" value="130"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40'/>
                        <button name="Add_To_Cart" type="submit"  id="latte" class="btn btn-danger mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/3.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cappuccino</h5>
                        <span class="card-text">Price:Rs.120</span>
                        <input type="hidden" name="Item_Name" value="Cappuccino"/>
                        <input type="hidden" name="Price" value="120"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart"  id="cappuccino" type="submit" class="btn btn-danger mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/Cola.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cola</h5>
                        <span class="card-text">Price:Rs.65</span>
                        <input type="hidden" name="Item_Name" value="Cola"/>
                        <input type="hidden" name="Price" value="65"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart" id="cola" type="submit" class="btn btn-danger mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/chocolateshake.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">ChocoShake</h5>
                        <span class="card-text">Price:Rs.250</span>
                        <input type="hidden" name="Item_Name" value="ChocoShake"/>
                        <input type="hidden" name="Price" value="250"/>
                        <input type="number" name="Quantity" value="1"  class="text-center" min='1' max='40'/>
                        <button  name="Add_To_Cart" id="chocoshake" type="submit" class="btn btn-danger mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        
    </div>
</div>
</body>
</html>