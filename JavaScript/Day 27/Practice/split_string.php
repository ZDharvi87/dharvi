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
      <h2>split a string</h2>
      <h4 id="res"></h4>
      <script>
         
          function sep(){
            let text = "hello from Dharvi, How are you?";
            const arr = text.split("");

            document.getElementById("res").innerHTML = ""+arr; 
        }
            sep();
            
            
         
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>