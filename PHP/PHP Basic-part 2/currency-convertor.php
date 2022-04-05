<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Currency </title>
    <script src="../../jq/dist/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"> </script>
   
</head>
  <body>
  <?php include("../../header.php") ?><br>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../sidebar.php") ?>
      </div>
      <div class="col-lg-9 ">

    <?php include("currency.html") ?>

 
<?php
 

if(isset($_POST['submit'])){
    $dollar = $_POST['dollar'];

    $euro = $dollar * 0.91192248;
    echo "<p class=text-danger><b>$dollar = $euro Euro  </b></p>";
} 
 
    
   
?>
<?Php ?>
</body>
</html>