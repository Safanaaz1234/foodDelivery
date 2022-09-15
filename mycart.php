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
    <title>Cart</title>
</head>
<body>
<div class="alan-btn"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 border rounded bg-light text-center my-5">
                <h1>MY CART</h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                <thead class="text-center">
                    <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Item Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php 
                    
                     if(isset($_SESSION["cart"])){
                        foreach($_SESSION["cart"] as $key => $value){
                            $sr = $key + 1;
                            $rem = $value['Item_Name'];
                            $remId = strtolower($rem);

                            echo "
                            <tr>
                                <td>$sr</td>
                                <td>$value[Item_Name]</td>
                                <td>$value[Price] <input type='hidden' class='iprice' value='$value[Price]'/></td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                <input type='number' class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit()' min='1' value='$value[Quantity]' max='40'/>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]' />
                                </form>
                                </td>
                                <td class='itotal'></td>
                                <td>
                                <form action='manage_cart.php' method='POST'>
                                <button name='Remove_Item' class='btn btn-outline-danger btn-sm' id='$remId'>REMOVE</button>
                                <input type='hidden' name='Item_Name' value='$value[Item_Name]' />
                                </form>
                                </td>
                            </tr>
                            ";
                        }
                    }
                    ?>
                    
                </tbody>
                </table>
            </div>

            <div class="col-lg-3">
                <div class="border rounded bg-light p-4">
                    <h4>Grand Total: </h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br/>
                    <?php 
                      if(isset($_SESSION["cart"]) && count($_SESSION["cart"])>0)
                      {
                    ?>
                    <form action="purchase.php" method="POST">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" class="form-control" id="fullname"  name="full_name" required />
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="phone" class="form-control" name="phone_no" required />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required />
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mode" id="exampleRadios2" value="COD" checked>
                                <label class="form-check-label" for="exampleRadios2">
                                    Cash On Delivery
                                </label>
                            </div>
                            <br/>
                        <button class="btn btn-primary btn-block" name="purchase">Make Purchase</button>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- <script type="text/javascript" src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
    <script>
         var alanBtnInstance = alanBtn({
         key: "0f807f9c9f1b54d821cb123122c239032e956eca572e1d8b807a3e2338fdd0dc/stage", 
            onCommand: function (commandData) {
                if (commandData.command === "remove") {
                     //call client code that will react on the received command
                    removes(commandData.item);
                    }
               else if(commandData.command === "myName"){
                    myName(commandData.naam);
                 }   
               else if(commandData.command === "getPhone"){
                    getPhone(commandData.phoneno);
               }  
               else if(commandData.command === "getAddress"){
                    getAddress(commandData.addr);
               }
               else if(commandData.command === "Purchase"){
                    purchase();
               }

              else if (commandData.command === "goBack") {
                    goBack();
                 },
                rootEl: document.getElementById("alan-btn"),
            });

        function removes(item){
            document.getElementById(item).click(); 
        }

        function myName(naam){
            document.getElementsByName("full_name")[0].value=naam;
        }

        function getPhone(phoneno){
            document.getElementsByName("phone_no")[0].value=phoneno;
        }

        
        function getAddress(addr){
            document.getElementsByName("address")[0].value=addr;      
        }
       
        function purchase(){
            document.getElementsByName("purchase")[0].click();
        }

        function goBack(){
             location.href="index.php";
         }

        var gt=0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById("gtotal");

        subTotal();
        function subTotal(){
        gt=0;
        for(i=0;i<iprice.length;i++){
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText = gt;
        }



    </script> -->


<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "8af3e1d87c24881921cb123122c239032e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "remove") {
        //call client code that will react on the received command
        removes(commandData.item);
      }
      else if(commandData.command === "myName"){
                    myName(commandData.naam);
                 }   
      else if(commandData.command === "getPhone"){
                        getPhone(commandData.phoneno);
        } 
     else if(commandData.command === "getAddress"){
                    getAddress(commandData.addr);
        }
     else if(commandData.command === "Purchase"){
                    purchase();
        }

    else if (commandData.command === "goBack") {
                    goBack();
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

  function removes(item){
            document.getElementById(item).click(); 
        }

        function myName(naam){
            document.getElementsByName("full_name")[0].value=naam;
        }

        function getPhone(phoneno){
            document.getElementsByName("phone_no")[0].value=phoneno;
        }

        
        function getAddress(addr){
            document.getElementsByName("address")[0].value=addr;      
        }
       
        function purchase(){
            document.getElementsByName("purchase")[0].click();
        }

        function goBack(){
             location.href="index.php";
         }

         function logOut(){
                document.getElementsByName("logout")[0].click()
            }

        function goTo(page){
            if(page=="cart"){
                window.location.href="mycart.php";
            }else{
            newPage = page+".php";
            window.location.href=newPage;}
        }
        var gt=0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById("gtotal");

        subTotal();
        function subTotal(){
        gt=0;
        for(i=0;i<iprice.length;i++){
            itotal[i].innerText = (iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText = gt;
        }

</script>
</body>
</html>