<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Square of Number using Callback</title>
    <style>
       
    </style>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5">
<h2 style="color: blueviolet;">Explain difference between var and let keyword using example.</h2>
    <script>
        var a=10;
        document.write("var global"+"\n"+"\n"+a+"\n|||||");
        if(true){
            var a=40;
            document.write("var in if"+"\n"+a+"\n |||||");
        }
        document.write("if print a  after if function  then it print a=40 overwrite it "+"\n"+a);

       

    </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    
  </body>
</html>