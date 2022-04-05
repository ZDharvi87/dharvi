<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>String Split</title>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5" >
      <h2>extract a specified number of characters from a string.</h2>
      <h2 id="res"></h2>
      <h2 id="res1"></h2>
      <script>
          function alpha(){
            let text="Dharvi";
            var a= text.charAt(4);
            document.getElementById("res").innerHTML=a+"\n"+"<br>";

            var b =text.charAt(0);
            document.getElementById("res1").innerHTML=b;

          }
          alpha();
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>