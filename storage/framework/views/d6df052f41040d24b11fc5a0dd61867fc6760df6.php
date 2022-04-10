<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile website</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent("content"); ?>
    <?php echo e(View::make('footer')); ?>

   
    
</body>
<style>
       body
      {
  
        background-image:url(image/hd.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }
      .pagination li a:hover 
      {
     background-color: chartreuse;
     

 }
 

      .pagination{
       margin-left:500px;
      }
      .detail-img
      {
          height:300px;
      }
    .custom-login{
        height :500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 400px !important;
    }
    .custom-product{
        height: 600px
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    .trening-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
.bo {
           
            background-image:url(image/ga.jpg);
            height: 700px;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            margin-top: 50px;
        } 
image {
            height: 400px;
            width: 400px;
            margin-top: 50px;
            margin-left: 40px;
            border-radius: 40px;

        }

.imagesl {
            height: 500px;
            width: 600px;

            display: none;
        }

.imco {
            margin-left: 300px;
            margin-top: 30px;
            height: 500px;
            width: 600px;
        
        }
.con 
 {
     margin-top: 20px;

     background-image: url(image/phone.jpg);
     background-position: center;
     border-top: 1px solid ;
     width: fit-content;
     height: 600px;
     background-repeat: no-repeat;
     background-size: cover;
    }
 .box 
 {
     margin-top: 200px;

 
     margin-left: 600px;
     height: 500px;
     width: 700px;
     
 }
 .p 
 {
     font-family: cursive;
     font-size: 40px; 
     margin-left: 30px;
 }
 .con2
 { display:flex;

}
.gaimg
{
    height:300px;
    width:300px;
    margin-left:20px;
    border:2px solid black;
    


    }
</style>
</html><?php /**PATH C:\Users\Lenovo\MobWeb\resources\views/master.blade.php ENDPATH**/ ?>