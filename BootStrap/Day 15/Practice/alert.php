<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Group practice</title>
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
        <div class="alert alert-success">
            <strong>Success</strong> alert class
        </div> <br> <br>
        <div class="alert alert-danger">
            <strong>Danger</strong> alert class
        </div> <br> <br>

        <div class="alert alert-warning">
            <strong>Warning</strong> alert class
        </div> <br> <br>
        <div class="alert alert-info">
            <strong>Info</strong> alert class
        </div> <br> <br>
        <div class="alert alert-primary">
            <strong>Primary</strong> alert class
        </div> <br> <br>
        <div class="alert alert-dark">
            <strong>Dark</strong> alert class
        </div> <br> <br>
        <div class="alert alert-warning alert-dismissble fade show" role="alert">
            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close" type="button"></button>
            Please to discard changes click on close 
        </div>
        
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</body>
</html>