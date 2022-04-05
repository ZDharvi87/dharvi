<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print & echo </title>
    <script src="../../../jq/dist/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"> </script>
    <style>
     #footer{
         margin-top: 100%;
     }
    </style>
    
</head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3 ">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 " style="margin-top: 10%; margin-left:45%" >
       <h4 class="text-success"> <?php 
       //Print Name Email-address Department using Print() function 
       print("Name: <b>Dharvi Zanzrukia</b> <br> Email : dzanzrukia15@gmail.com <br> Department: PHP <br><br>");?> </h4>
<h4 class="text-info"><?php
       // Print Name Email-address Department using echo() function
       echo "Name: <b>Dharvi Zanzrukia</b> <br> Email : dzanzrukia15@gmail.com <br> Department: PHP "; ?> </h4>

        
      </div>
    </div><!---row-->
   
  </body>
</html>