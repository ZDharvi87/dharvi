<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>phpinfo()</title>
    <script src="../../../jq/dist/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"> </script>
    <style>
     
    </style>
    
</head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3 ">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9" >
        <?php 

        echo phpinfo();
        ?>
      </div>
    </div><!---row-->
  </body>
</html>