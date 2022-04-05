<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>progress-bar practice</title>
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
    <div class="container mt-3">
        <div class="progress">
        <div class="progress-bar" style="width: 20%;"></div>
    </div><br><br>

    <div class="progress">
        <div class="progress-bar bg-success" style="width: 30%;">30%</div>
    </div><br><br>

    <div class="progress">
        <div class="progress-bar bg-warning" style="width: 60%;"></div>
    </div><br><br>

    <div class="progress">
        <div class="progress-bar bg-info" style="width: 50%;"></div>
    </div><br><br>

    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%;"></div>
    </div><br><br>
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</body>
</html>