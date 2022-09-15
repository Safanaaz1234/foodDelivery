<?php include("header.php");
  if(!isset($_SESSION['logged_in'])){
    header("location: userlogin.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        @media screen and (min-width:340px) and (max-width:768px){
            .card{
                width:300px;
            }
        }
    </style>
</head>
<body>
<div class="alan-btn"></div>
<div class="container md-5 my-5">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/Margherita.jpeg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Margherita</h5>
                        <span class="card-text">Price:Rs.199  </span>
                        <input type="hidden" name="Item_Name" value="Margherita"/>
                        <input type="hidden" name="Price" value="199"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40'/>
                        <button name="Add_To_Cart" type="submit"  id="margherita" class="btn btn-info mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6 ">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/CheesePizza.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Cheese</h5>
                        <span class="card-text">Price:Rs.299</span>
                        <input type="hidden" name="Item_Name" value="Cheese"/>
                        <input type="hidden" name="Price" value="299"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart"  id="cheese" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                        
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6 ">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/Mexican_Green_Wave_Pizza.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mexican Green Wave</h5>
                        <span class="card-text">Price:Rs.239</span>
                        <input type="hidden" name="Item_Name" value="Mexican Green Wave"/>
                        <input type="hidden" name="Price" value="239"/>
                        <input type="number" name="Quantity" value="1" class="text-center" min='1' max='40' />
                        <button  name="Add_To_Cart" id="mexican green wave" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        <div class="col-lg-3 col-md-6">
            <form action="manage_cart.php" method="post" >
                <div class="card">
                    <img src="images/ParathaPizza.jpg" class="card-img-top" alt="food" height="300px">
                    <div class="card-body text-center">
                        <h5 class="card-title">Paratha</h5>
                        <span class="card-text">Price:Rs.169</span>
                        <input type="hidden" name="Item_Name" value="Paratha"/>
                        <input type="hidden" name="Price" value="169"/>
                        <input type="number" name="Quantity" value="1"  class="text-center" min='1' max='40'/>
                        <button  name="Add_To_Cart" id="paratha" type="submit" class="btn btn-info mt-2">Add To Cart</button>
                       
                    </div>
                </div>
            </form>    
        </div>
        
    </div>
</div>

<?php include("StreetFood.php")?>
<?php include("Drinks.php")?>
<?php include("Desserts.php")?>
<!--<button onclick="changes()">hello</button>-->
<!-- <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "0f807f9c9f1b54d821cb123122c239032e956eca572e1d8b807a3e2338fdd0dc/stage", 
    onCommand: function (commandData) {
      if (commandData.command === "change") {
        //call client code that will react on the received command
        changes(commandData.item,commandData.quantity);
      }
      else if(commandData.command === "logOut"){
        logOut();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });

  function logOut(){
    document.getElementsByName("logout").[0].click();
  }

  function changes(item,quantity){
    document.getElementById(item).previousElementSibling.value= quantity;
    document.getElementById(item).click();
  }


  if (commandData.command === "change") {
        //call client code that will react on the received command
        changes(commandData.item,commandData.quantity);
      }
      else if(commandData.command === "logOut"){
        logOut();
      }
</script> -->

<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "8af3e1d87c24881921cb123122c239032e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "change") {
        changes(commandData.item,commandData.quantity);
        
      }
      else if(commandData.command === "logOut"){
        logOut();
      }
      else if(commandData.command === "goTo"){
        goTo(commandData.page);
    } 
    },
    rootEl: document.getElementById("alan-btn"),
  });

  function changes(item,quantity){
    document.getElementById(item).previousElementSibling.value= quantity;
    document.getElementById(item).click();
  }

  function logOut(){
    document.getElementsByName("logout")[0].click()
  }

  function goTo(page){
    if(page=="cart"){
                window.location.href="mycart.php";
            }
     else{    newPage = page+".php";
            window.location.href=newPage;}
  }
</script>

</body>
</html>