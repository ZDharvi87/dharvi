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
            <form class="form-group">
            <div class="input-group">
                <span class="input-group-text">Name</span>
                <input type="text" name="text" class="form-control">
            </div> <br> <br>

            <div class="input-group">
                <span class="input-group-text">email</span>
                <input type="email" name="text" class="form-control">
                <span class="input-group-text">abc.@gmail.com</span>
            </div> <br> <br>
    
            <div class="input-group">
                <span class="input-group-addon"></span>
                <input type="checkbox" name="text" class="form-check-input">
                <input type="checkbox" name="text" class="form-check-input">
                <input type="checkbox" name="text" class="form-check-input">
                
            </div> <br> <br>
            
            <button type="submit" class="btn btn-primary">Submit</button><br> <br>
            <div class="input-group">
            <input type="text" class="input-group-text">
            <button type="Submit" class="btn btn-outline-secondary">View</button> 
            </div><br><br>

            <div class="dropdown">
                <button class="btn btn-outline-warning dropdown-toggle"  data-bs-toggle="dropdown" type="button" >Menu</button> 
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">About</a></li>
                    <li><a class="dropdown-item" href="#">Contact us</a></li>
                </ul>
            </div>
         
    
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</body>
</html>