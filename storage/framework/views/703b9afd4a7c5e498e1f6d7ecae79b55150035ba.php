<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project</title>
    <link rel="stylesheet" href="style.css">
   
</head>

<body style=" background-image: none; background-color:yellowgreen;">
<div class="nav">
        <nav style="background: none;">
            <a href="#" class="logo"></a>
            <ul class="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/myorders">Orders</a></li>
                <li><a href="/info">Info</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact-us">Contact</a></li>
                <li><a href="/bs" style="margin-right: 60px;">Best Seller</a></li>
            </ul>
            
        </nav>
    </div>

    <div class="info">
        <div class="overlay"> <img src=<?php echo e(asset("image/qq.jpg")); ?> class="mob"></div>

       

        <div class="cir" id="circle">

            <div class="feature one">
                <img src=<?php echo e(asset("image/camera.png")); ?> >
                <diV>
                    <h2>CAMERA </h2>
                    <p> 48MP,Wide Angle </p>
                </diV>
            </div>
            <div class="feature two">
                <img src=<?php echo e(asset("image/now.png")); ?>>
                <diV>
                    <h2>DISPLAY</h2>
                    <p>6.57 INCH</p>
                </diV>
            </div>
            <div class="feature three">
                <img src=<?php echo e(asset("image/tran.png")); ?>>
                <diV>
                    <h3>PROCESSOR</h3>
                    <p> 870 snapdragon</p>
                </diV>
            </div>
            <div class="feature four">
                <img src=<?php echo e(asset("image/batt.png")); ?>>
                <diV>
                    <h2>BATTERY</h2>
                    <p>5400 MAH</p>
                </diV>
            </div>
        </div>
    </div>
    <div class="x">
        <button onclick="up()"> ^ </button>
        <h1 style="font-family: cursive ; color: black;">FeAtUrEs</h1>
        <button onclick="dn()" style="transform: rotate(180deg);"> ^ </button>

    </div>
    <div class="y" style="position: absolute; top: 80%; right: 20%;">
        <h2>MODEL:-</h2>
        <h3 style="margin-left: 120px; margin-top: -20px;">XYZ</h3>
    </div>

    
    <script>

        var rv = document.getElementById("circle").style.transform;
        var rs;
        function up() {

            rs = rv + "rotate(-90deg)";
            document.getElementById("circle").style.transform = rs;
            rv = rs;

        }
        function dn() {

            rs = rv + "rotate(+90deg)";
            document.getElementById("circle").style.transform = rs;
            rv = rs;

        }
    </script>
</body>
<style>
     nav 
 {
     display: flex;
     width: 100%;
     height: fit-content;
     background-color: cyan;
     align-items: center;
     justify-content: space-between;
 }

 .menu 
 {
     display: flex;
     list-style-type: none;
 }
 a 
 {
     margin-left: 30px;
     text-decoration: none;
     color: #000;
     font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
     font-size: 20px;

 }

 .menu li a:hover 
 {
     background-color: chartreuse;
     

 }

 .logo 
 {
     color: black;

     font-family: cursive;
 }

 .en 
 {
     margin-right: 20px;
     color: black;

 }
 .info
 {
    position: absolute;
    height: 800px;
    width: 800px;
    left: -15%;
    top: -20%;  
    
    
  

     
     
 }
 .x{
    top: 35%;
     right: 10%;
     position: absolute;
 }
 button{
     margin-left: 550px;
     font-size: 30px;
     background: none;
     border: none;
     color: blanchedalmond;
 }

 .cir
 {
    height: 800px;
    width: 800px;
    position: absolute;
    top: 2%;
    left: 0;
    border-radius: 50%;
    transform: rotate(0deg);
    transition: 1s;
 }

    .feature img{
        width: 70px;
    }
    .feature{
        position: absolute;
        display: flex;
       
    }
    .one{
     
        margin-left: 300px;
        margin-top: 30px;
        transform: rotate(270deg);
    
    }
    .two
    {
        margin-top: 300px;
        margin-left: 30px;
        transform: rotate(180deg);
    }
    .three{
     
        margin-left: 300px;
        margin-top: 650px;
        transform: rotate(90deg);
    
    }
    .four
    {
        margin-top: 370px;
        margin-left: 600px;
    }
    .mob
    {
      
        position: absolute;
        height:280px;
        width: 120px;
        left: 40%;
        top: 40%;
       
        z-index: 1;
    }  

    .overlay
    {
        width: 0;
        height: 0;
        border-top: 400px solid rgb(6, 5, 7);
        border-bottom: 500px solid  rgb(6, 5, 7);
        border-right: 400px solid transparent;
        border-left: 400px solid  rgb(6, 5, 7);
    }
    </style>

</html><?php /**PATH C:\Users\Lenovo\MobWeb\resources\views/bestseller.blade.php ENDPATH**/ ?>