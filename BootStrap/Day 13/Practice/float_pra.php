<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Float property </title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"></script>
    </head>
    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2 text-center" >
        <h4>Float property practice</h4> 
        <div class="container ">    <!--fixed-top , sticky-top and clearfix also we can apply-->
            <p class="float-left bg-warning sticky-top">Hello</p>
            <p class="float-right bg-warning">How are you?</p>
            <p class="float-none bg-warning">Dharvi Zanzrukia</p>
            <p class="float-md-right bg-warning">Today is new day</p>
        </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
</html>