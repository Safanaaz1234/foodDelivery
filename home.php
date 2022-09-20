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
    <title>Home</title>
    <link rel="stylesheet" href="homestyle.css">
</head>
<body>
<div class="alan-btn"></div>
    <section class="home" id="home">
        <div class="content">
            <h3>Food made with love</h3>
            <p>Part of the secret of success is to eat what you like and <br/> let the food fight it out inside</p>

        </div>
        <div class="image">
            <img src="images/food1.png" alt="food1.png" width="750px" height="450px">
        </div>
    </section>
    <section class="steps">
      <div class="box">
        <img src="images/st1.png" alt="step">
        <h3>choose your favourite food</h3>
      </div>
      <div class="box">
        <img src="images/st2.png" alt="step">
        <h3>free and fast delivery</h3>
      </div>
      <div class="box">
        <img src="images/st3.png" alt="step">
        <h3>easy payment methods</h3>
      </div>
      <div class="box">
        <img src="images/st4.png" alt="step">
        <h3>and finally, enjoy your food</h3>
      </div>
    </section>

    <section class="footer">
      <div class="share">
        <a href="#" class="butn" style="text-decoration: none;">Facebook</a>
        <a href="#" class="butn"style="text-decoration: none;">Twitter</a>
        <a href="#" class="butn" style="text-decoration: none;">Instagram</a>
        <a href="#" class="butn" style="text-decoration: none;">WhatsApp</a>
      </div>
    </section>
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>



<script type="text/javascript"
 src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
<script>
  var alanBtnInstance = alanBtn({
    key: "0f807f9c9f1b54d821cb123122c239032e956eca572e1d8b807a3e2338fdd0dc/stage",
    onCommand: function (commandData) {
      if (commandData.command === "goTo") {
        goTo(commandData.page);
      }
      else if(commandData.command === "logOut"){
        logOut();
      }
      else if(commandData.command === "dishes"){
        dishes();
      }
    },
    rootEl: document.getElementById("alan-btn"),
  });

  function logOut(){
    document.getElementsByName("logout")[0].click()
  }
  function goTo(page){
    if(page=="cart"){
                window.location.href="mycart.php";
            }
     else if(page=="menu"){
      window.location.href="index.php";
     }       
     else{    newPage = page+".php";
            window.location.href=newPage;}
  }

  function dishes(){
    window.location.href="index.php";
  }
</script>
</body>
</html>