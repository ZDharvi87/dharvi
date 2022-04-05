<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List-group</title>
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
        <ul class="list-group">
            <li class="list-group-item">Graps</li>
            <li class="list-group-item">Mango</li>
            <li class="list-group-item">Orange</li>
        </ul> <br> <br>
        <ul class="list-group">
            <li class="list-group-item-primary ">Graps</li>
            <li class="list-group-item-info">Mango</li>
            <li class="list-group-item-warning">Orange</li>
        </ul><br> <br>
        <ul class="list-group">
            <li class="list-group-item-primary list-group-item-action">Graps</li>
            <li class="list-group-item-info list-group-item-action">Mango</li>
            <li class="list-group-item-warning list-group-item-action">Orange</li>
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</body>
</html>