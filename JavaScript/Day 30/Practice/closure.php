<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Function Call</title>
    
  </head>
  <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
    </div>
      <div class="col-lg-9 mt-5 ">
      <h2 class="ms-5">Function Closure</h2><br>
      <h2 id="res" class="ms-5"></h2><br>
      <button type="button" onclick="number()" class="btn btn-primary ms-5">Click on button for print Number</button>
      <script>
          const num = (function () {
        let counter = 0;
         return function () {counter += 1; return counter;}
        })();

        function number(){
        document.getElementById("res").innerHTML = num();
        }
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>