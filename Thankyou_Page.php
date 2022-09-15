<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thankyou</title>
    <style>
        *{
            /* background: linear-gradient(to right,rgb(201, 234, 237),rgb(193, 237, 255)); */
           
           background-color: #F8F9FA;
        }
        .container{
            font-size:20px ;
            margin-top:6%;
        }
        button{
            background:linear-gradient(to right,#2bd893,rgb(47, 169, 217));
            /* background:linear-gradient(to right,#ff0909,rgb(9, 255, 0)); */
            border:none;
            outline: none;
            padding:15px 100px;
            border-radius:5px;
            color:white;
            font-size: 20px;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
<div class="alan-btn"></div>
    <div class="container">
        <center><h1><b>Thank you!</b></h1>
        <h2><b>We have already started preparing your order</b></h2></center>  
    </div>
    <div class="butn1">
       <center><a href="index.php"><button>Back to Menu</button></a></center>
    </div>
    <center><img src="images/Delivery.png" alt="Delivery.png" style="margin-top:3%;"></center>

    <script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "8af3e1d87c24881921cb123122c239032e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "goBack") {
        goBack();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });


  function goBack(){
    window.location.href="index.php";
  }
</script>
<!-- 
  function logOut(){
    document.getElementsByName("logout").[0].click();
  }

  function changes(item,quantity){
    document.getElementById(item).previousElementSibling.value= quantity;
    document.getElementById(item).click();
  }

</script> -->

</body>
</html>