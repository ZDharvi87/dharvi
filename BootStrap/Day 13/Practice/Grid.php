<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Grid </title>
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
        <h4>Basic learning </h4>
        <div class="container">
            <div class="row">
                <div class="col-*-*">1</div>
                <div class="col-*-*">2</div>
            </div>
            <div class="row">
                <div class="col-*-*">1</div>
                <div class="col-*-*">2</div>
                <div class="col-*-*">3</div>
            </div>
<br> <br> <br>
            <h4>Learning with diffrent screen sizes </h4>
            <div class="row">
                <div class="col-sm-3 bg-primary text-dark">1</div>
                <div class="col-sm-3 bg-primary text-dark">2</div>
            </div>
            <div class="row">
                <div class="col-md-4 bg-info text-danger">1</div>
                <div class="col-md-4 bg-info text-danger">2</div>
                <div class="col-md-4 bg-info text-danger">3</div>
            </div>
            <div class="row">
                <div class="col-lg-2 bg-warning text-dark">1</div>
                <div class="col-lg-2 bg-warning text-dark">2</div>
                <div class="col-lg-2 bg-warning text-dark">3</div>
                <div class="col-lg bg-warning text-dark">4</div>
            </div>
            <div class="row">
                <div class="col-xl-4 bg-success text-danger">1</div>
                <div class="col-xl-4 bg-success text-danger">2</div>
                <div class="col-xl-3 bg-success text-danger">3</div>
                <div class="col-x1-4 bg-success text-danger">4</div>
                <div class="col-xl-7 bg-success text-danger">5</div>
            </div>
            <div class="row">
                <div class="col-xxl-6 bg-danger text-dark">1</div>
                <div class="col-xxl-6 bg-danger text-dark">2</div>
                <div class="col-xxl-3 bg-danger text-dark">3</div>
                
            </div>
        </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
    </html>