<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form practice</title>
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
        <form>
            <div class="form-group">
                <label for="text" >Name</label>
                <input type="text" name="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text" >Password</label>
                <input type="password" name="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text" >email</label>
                <input type="email" name="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="text" class="form-check-label">checkbox</label>
                <input type="checkbox" name="text" class="form-check">
                <input type="checkbox" name="text" class="form-check">
                <input type="checkbox" name="text" class="form-check">
                
            </div>
            <div class="form-group">
                <select  class="form-control" >
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                  </select>
            </div> <br> <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</body>
</html>