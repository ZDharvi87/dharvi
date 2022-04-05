<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Today-Date</title>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5" >
      <h2>JavaScript function to get the current date</h2>
      <h3 id="res" class="mt-3"></h3>
      <script>
          function today_date(){
              const d=new Date();
              document.getElementById("res").innerHTML=d;
          }
          today_date();
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>