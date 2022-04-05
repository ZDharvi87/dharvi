<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>String is Empty</title>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5" >
      <script>
          var str="";
          document.write(str +"\n"+"\n");
          var str1="";
          function isempty(){
              if (str1=="")
              {
                  document.write("String is empty" + "\n");
              }
              else{
                  document.write("string presents");
              }
          }
        isempty();
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>