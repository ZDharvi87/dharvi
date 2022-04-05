<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title> Resize Window</title>
   
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5" id="ans">
    <input type="button" value="Create Window" onclick="createw()"  class="btn btn-success"><br><br>
    <input type="button" value="Resize window" onclick="resize()"  class="btn btn-success">

    <script>
         let myw;
 
        function resize(){
           
            myw=window.open("","", "width=200, height=100");
        }
        function createw(){
           
            myw.resizeTo(500,500);
        }
    </script>
      </div>
    </div>
  <?php include("../../../footer.php") ?>
  </body>
</html>