<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BMI</title>
    <script src="../../jq/dist/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"> </script>
   
</head>
  <body>
  <?php include("../../header.php") ?><br>
    <div class="row">
      <div class="col-lg-3 ">
        <?php include("../sidebar.php") ?>
      </div>
      <div class="col-lg-9 ">
      <?php include("BMI.html") ?>
        <?php 
        if(isset($_POST['submit'])){ 
      $weight = $_POST['weight'];
      $height =$_POST['height'];
      $height= (Float)$height;
      // test
    
      $length = strlen($weight); // weight length
      $lengthh = strlen($height);
    
       
      
      if($length > 3){
        echo "<p class=text-danger fs-4>please enter the weight in 3 digit</p>";
        
      }
       if($lengthh > 4 || $lengthh < 4 ){
        echo "<p class=text-danger fs-4>please enter the height in 4 digit</p>";
      }

     
        }
        else{
          $height= $height * 0.0254; // converted height in meter
          $height = $height * $height; // height square 
          $bmi = $weight / $height; // divide  weight by height  
          $bmi=round($bmi);
          echo "<p class=text-info><b>The body mass index is $bmi  </b></p>";
           }
    
    ?>
      </div>
    </div>
  </body>
</html>