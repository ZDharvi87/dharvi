<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Navbar Dropdown</title>
    <link rel="Stylesheet" href="../../../css/bootstrap.min.css"/>
  </head>
<body>
<?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2 text-center" >
    <div class="container">
        <nav class="navbar navbar-expand">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Navbar</a>
                </li>
                <li class="nav-item-dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                    <a href="#" class="nav-link dropdown-item">Link 1</a>
                    </li>
                
            </div>

        </nav>
    </div>
    </div>
<?php include("../../../footer.php") ?>
</body>
</html>
