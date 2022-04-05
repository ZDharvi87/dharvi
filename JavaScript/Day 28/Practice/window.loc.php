<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Window.location to navigate another page</title>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5">
     <input type="submit" value="click me" id="res" onclick="page()" class="btn btn-primary" style="margin-left: 40%;">
     <script>
         function page(){
             window.location.assign("https://www.google.com/");
         }
        
     </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>