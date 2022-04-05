<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print String </title>
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
      <div class="col-lg-3  ">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 w-50" style="margin-top: 10%; margin-left:10%" >
      <div class="text-success fs-3 border">
        <?php 
        echo "We've learned basic PHP <br> We are going to develop a basic application <br>";
        echo "You are at C:\\";
        ?>
      </div>
      </div>
    </div><!---row-->
   
  </body>
</html>