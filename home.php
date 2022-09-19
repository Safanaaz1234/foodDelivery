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
    <style>
       section{
      padding:2rem 7%;
      
    }
    .home{
      background:linear-gradient(to right,#ff7165,#ffefb5);
      display:flex;
      flex-wrap:wrap;
      gap:8rem;
      min-height: 100vh;
      align-items: center;
    }
    
    .home .content{
      
      padding-top: 6.5rem;
    }
    
    .home .image img{
      width:100%;
      padding:1rem ;
      animation: float 3s linear infinite;
    }
    
    @keyframes float{
      0%,100%{
        transform:translateY(0rem);
      }
      50%{
        transform:translateY(3rem);
      }
    }
    
    .home .content h3{
      font-size: 3rem;
      color:#333;
    }
    .home .content p{
      font-size:1rem;
      color:#fff;
      padding:1rem 0;
    }
    .steps{
      display:flex;
      flex-wrap:wrap;
      gap:.5rem;
      padding:1rem;
      margin-top:8rem;
      margin-bottom:8rem;
    }
    .steps .box{
      flex:1 1 20rem;
      text-align: center;
      
    }
    .steps .box img{
      border:1rem solid #fff;
      border-radius:50%;
      box-shadow: 0 .5rem 1rem rgba(0,0,0,.5);
      width:200px;
      height:200px;
    }
    .steps .box h3{
      font-size: 1.5rem;
      color:#333;
      padding:1rem 0;
    }
    .footer{
      text-align: center;
      background:linear-gradient(to right,#ff7165,#ffefb5);
    }
    .footer .share{
      display:flex;
      gap:1.5rem;
      justify-content:center;
      flex-wrap: wrap;
    }
    
    .butn{
      text-decoration: none;
      display:inline-block;
      padding:.8rem 3rem;
      border:.2rem solid red;
      color:red;
      cursor:pointer;
      font-size: 1rem;
      
      border-radius: .5rem;
      position:relative;
      overflow: hidden;
      z-index: 0;
      margin-top:1rem;
      margin-bottom:1rem;
    }
    .butn::before{
      content:'';
      position: absolute;
      top:0;right:0;
      width:0%;height:100%;
      background:linear-gradient(to right,#FF3B3B,#FFAD57);
      transition:.3s linear;
      z-index: -1;
    }
    .butn:hover::before{
      width:100%;
      left:0;
    }
    .butn:hover{
      color:#fff;
    }
    #scroll-top{
      text-decoration: none;
      position:fixed;
      top:calc(100% - 12rem);
      left:2rem;
      padding:.5rem 1rem;
      font-size:2rem;
      background:linear-gradient(to right,#FF3B3B,#FFAD57);
      color:#fff;
      
      border-radius: .5rem;
      transition:1s linear;
      
    }
   
    </style>
</head>
<body>
<div class="alan-btn"></div>
    <section class="home" id="home">
        <div class="content">
            <h3>Food made with love</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing<br/> elit. Dolorum lorem ipsum <br>
            Lorem, ipsum dolor sit amet <br/>consectetur adipisicing elit. Nam beatae ex usamus reprehenderit? Lorem<br/> ipsum dolor sit amet 
            </p>

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