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
                    <img src="images/1.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Burger</h5>
                        <span class="card-text">Price:Rs.200  </span>
                        <input type="hidden" name="Item_Name" value="Burger"/>
                        <input type="hidden" name="Price" value="200"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40'/>
                        <button name="Add_To_Cart" type="submit"  id="burger" class="btn btn-info mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/sandwich.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sandwich</h5>
                        <span class="card-text">Price:Rs.50</span>
                        <input type="hidden" name="Item_Name" value="Sandwich"/>
                        <input type="hidden" name="Price" value="50"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart"  id="sandwich" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/Spaghetti.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Spaghetti</h5>
                        <span class="card-text">Price:Rs.450</span>
                        <input type="hidden" name="Item_Name" value="Spaghetti"/>
                        <input type="hidden" name="Price" value="450"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart" id="spaghetti" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/Pasta.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Pasta</h5>
                        <span class="card-text">Price:Rs.299</span>
                        <input type="hidden" name="Item_Name" value="Pasta"/>
                        <input type="hidden" name="Price" value="299"/>
                        <input type="number" name="Quantity" value="1"  class="text-center" min='1' max='40'/>
                        <button  name="Add_To_Cart" id="pasta" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        
    </div>
</div>
</body>
</html>