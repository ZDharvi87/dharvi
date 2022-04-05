<?php $url= "http://".$_SERVER['SERVER_NAME']."/2458-Dharvi-Feb22" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.min.js"> </script>
    <title>Index_PHP</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-light shadow mb-1 bg-white position-relative">
        <div class="container-fluid">
     
          <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            
            <em class="fa fa-home" style="font-Size:30px;"> <a href="../index.php" class="text-decoration-none text-dark">Home</a> </em>
          
            <div class="d-flex">
         
        <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <div class=" mt-2  ">
               
                <a class="text-decoration-none  fs-5 fw-bold " data-bs-toggle="tooltip" data-bs-placement="bottom" title="HTML" style="color:#11698e;" href="../HTML/Index_HTML.php" >HTML</a>


              </div>
    </div>
    
    <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <div class=" mt-2 ms-4 ">
               
                <a class="text-decoration-none  fs-5 fw-bold "  style="color:#11698e;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="CSS" href="../CSS_w/index_css.php" >CSS</a>

              </div>
    </div>
 
    <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <div class=" mt-2 ms-4 ">
               
                <a class="text-decoration-none  fs-5 fw-bold " style="color:#11698e;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="BootStrap" href="../BootStrap/Index_BS.php" >Bootstrap</a>

              </div>
    </div>
    <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <div class=" mt-2 ms-4 ">
               
                <a class="text-decoration-none  fs-5 fw-bold " style="color:#11698e;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="JavaScript" href="../JavaScript/Index_js.php" >JavaScript</a>

              </div>
    </div>
    <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <div class=" mt-2 ms-4">
               
                <a class="text-decoration-none  fs-5 fw-bold " style="color:#11698e;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jquery" href="../JQuery/index_jq.php" >JQuery</a>

              </div>
    </div>
    <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <div class=" mt-2 ms-4 me-5 ">
               
                <a class="text-decoration-none  fs-5 fw-bold " style="color:#11698e;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="PHP" href="../PHP/index_PHP.php" >PHP</a>

              </div>
    </div>
  </div>
        </div>
</nav>
<!--Side bar-->
      <div class="d-flex mb-2 ">
      
        <div id="col-lg-3">
      <div class="flex shadow mt-0 p-3 bg-white position-relative h-100  " style="width: 220px;">
          <span class="text-info text-center fw-bolder fs-4" >PHP Work</span>
        <hr>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#day13" aria-expanded="false">
              PHP Basic 
            </button>
            <div class="collapse show" id="day13">
              <ul class="btn-toggle-nav  list-unstyled  pb-1 small">
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/PHP/PHP  Basic/Practice/PHP_info.php" >PHP info</a></li>
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/PHP/PHP  Basic/Practice/Print_String.php" >Print String </a></li>
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/PHP/PHP  Basic/Practice/Print&echo.php" >Print & echo</a></li>
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/PHP/PHP  Basic/Practice/Form.php">Registration form</a></li>
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/PHP/PHP  Basic/Practice/login.php" >Login form</a></li>

                   
                  </ul>
              
            </div>
          </li>
        </ul>
        
      </div>
       
    <div></div>
        </div>
        <div class="col-lg-9">
        <img src="../img/php.png" class="img    w-50 opacity-100" style="margin-left: 25%; margin-bottom:20% ;margin-top:20%" >
        </div>
      </div>
      <?php include("../footer.php") ?>
  </body>
</html>