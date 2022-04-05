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
    <title>Index_JQ</title>
  </head>
  <body>
  
<!--Side bar-->
<div class="flex shadow mt-0 p-3 bg-white   " style="width: 220px; height:550px;">
          <span class="text-info text-center fw-bolder fs-4" >Jquery Work</span>
        <hr>
        <ul class="list-unstyled ps-0">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#day13" aria-expanded="false">
              Day-33
            </button>
            <div class="collapse show" id="day13">
              <ul class="btn-toggle-nav  list-unstyled  pb-1 small">
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/JQuery/Day 33/Assignment/city.php" >Assignment-City</a></li>
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/JQuery/Day 33/Practice/Practice 1.php" >Create Paragraph using JQ </a></li>
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/JQuery/Day 33/Practice/Practice 2.php" >Hide-element</a></li>
                   
                  </ul>
              
            </div>
          </li>
        </ul>
        <!--Day 27-->
        <ul class="list-unstyled ps-0">
            <li class="mb-1">
              <button class="btn btn-toggle align-items-center rounded collapsed fw-bold" data-bs-toggle="collapse" data-bs-target="#day14" aria-expanded="true">
                Day-34
              </button>
              <div class="collapse show" id="day14">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                    <li><a class="dropdown-item" href="<?php echo $url ?>/Dharvi_Zanzrukia/JQuery/Day 34/Assignment/Data_tbl.php" >Assignment-JSON Data Table </a></li>
                    
                    </ul>
                
              </div>
            </li>
        </ul>

     
        <div></div>
    </div>
   
  </body>
</html>