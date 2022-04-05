<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Typography</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.min.js"></script>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    </head>
    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2 text-center" >
        <div class="container">
            <!--text alignment-->
            <p class="text-center">Text in Center</p>
            <p class="text-start">Text at start</p>
            <p class="text-end">Text at end</p>
            <p class="text-nowrap">Text noWrap</p>
            

            <ul class="list-inline">
                <li class="list-inline-item">A</li>
               <li class="list-inline-item">B</li>
            </ul>

            <!--Text color classes-->
            <p class="text-muted">This is mute color</p>
            <p class="text-dark">This is Dark color</p>
            <p class="text-white">This is white color</p>
            <p class="text-primary">This is primary color</p>
            <p class="text-secondary">This is Secondary color</p>
            <p class="text-success">This is Success color</p>
            <p class="text-info">This is Info color</p>
            <p class="text-warning">This is warning color</p>
            <p class="text-danger">This is Danger color</p>
            <p class="text-body">This is body color</p>
            <p class="text-light">This is light color</p>


            <!--Text backgrpund color classes-->
           
            <p class="bg-dark"></p>This is Dark color</p>
            <p class="bg-primary">This is primary color</p>
            <p class="bg-secondary">This is Secondary color</p>
            <p class="bg-success">This is Success color</p>
            <p class="bg-info">This is Info color</p>
            <p class="bg-warning">This is warning color</p>
            <p class="bg-danger">This is Danger color</p>
            <p class="bg-light">This is light color</p>
        
        </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
</html>