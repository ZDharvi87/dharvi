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
          <form method="POST">
          <table class="table mt-5 ms-5 w-50">
              <tr class="table w-50">
                  <td class="w-25">
                  <img src="download.jpeg" alt="" class="img"> </td>

                  <td class="">
                        <input type="radio" name="Lion" value="Lion">Lion <br>
                        <input type="radio" name="Zebra" value="Zebra">Zebra <br>
                        <input type="radio" name="tiger" value="tiger">White tiger<br>
                        <input type="radio" name="horse" value="Horse">Horse
                       
                  </td>
              </tr>
              <tr>
                  <td colspan="2">
                      <input type="Submit" name ="submit" class="btn btn-success">
                  </td>
              </tr>
          </table>
          </form> <br>
          <?php 
      if(isset($_POST['submit'])){
      if(isset($_POST['tiger'])){
          echo "<h4 class=text-success>Your answe is Correct it is White-Tiger </h4>";
      }
      else{
          echo "<h4 class=text-danger>Your answer is wrong</h4>";
      }
      }
      ?>
      </div>
    
    </div>
  </body>
</html>