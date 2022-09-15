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
                    <img src="images/CheeseCake.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cheese Cake</h5>
                        <span class="card-text">Price:Rs.1450  </span>
                        <input type="hidden" name="Item_Name" value="Cheese Cake"/>
                        <input type="hidden" name="Price" value="1450"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40'/>
                        <button name="Add_To_Cart" type="submit"  id="cheese cake" class="btn btn-info mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/ApplePie.jpeg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Apple Pie</h5>
                        <span class="card-text">Price:Rs.1550</span>
                        <input type="hidden" name="Item_Name" value="Apple Pie"/>
                        <input type="hidden" name="Price" value="1550"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart"  id="apple pie" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/4.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Donut</h5>
                        <span class="card-text">Price:Rs.170</span>
                        <input type="hidden" name="Item_Name" value="Donut"/>
                        <input type="hidden" name="Price" value="170"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart" id="donut" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/IceCream.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Ice Cream</h5>
                        <span class="card-text">Price:Rs.200</span>
                        <input type="hidden" name="Item_Name" value="Ice Cream"/>
                        <input type="hidden" name="Price" value="200"/>
                        <input type="number" name="Quantity" value="1"  class="text-center" min='1' max='40'/>
                        <button  name="Add_To_Cart" id="ice cream" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        
    </div>
</div>
</body>
</html>