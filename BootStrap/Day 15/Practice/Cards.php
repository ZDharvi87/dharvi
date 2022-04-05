<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Card practice</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.min.js"></script>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
  </head>
<body>
</body>
<?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2 text-center" >
<div class="container mt-3">
    <div class="card">
        <img src="img1.jpg" alt="image" width="200px" height="200px">
        <div class="card-body">
            <h4 class="card-title">Hello hills</h4>
            <p class="card-text">view from hills with waterfall and tea farm</p>
            <button class="btn btn-primary">View more</button>
        </div>
    </div><br><br>

    <div class="card">
        <div class="card-header"> Hello hills </div>
            <div class="card-body">
            <p class="card-text">view from hills with waterfall and tea farm</p>
            <button class="btn btn-primary">View more</button>
            </div>
        <div class="card-footer">@2022</div>
    </div>
</div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</html>