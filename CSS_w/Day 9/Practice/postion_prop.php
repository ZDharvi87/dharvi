<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Module 2 Position Practice</title>
    <style>
        .static{
            border: 2px solid;
            position: static;
        }
        .relative{
            border: 2px solid;
            position: relative;
        }
        .absolute{
            border: 2px solid;
            position: absolute;
        }
        .sticky{
            border: 2px solid;
            position: sticky;
            margin-top: 6%;
        }
        .fixed{
            border: 2px solid;
            position: fixed;
        }
        
  
   .main2{
  flex: 70%;
  overflow: auto;
  
  }

  
    </style>
    </head>
    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5"  >
        <div class="main2">
        <div class="static">
            These is static postion 
        </div>

        <div class="relative">
            These is relative postion 
        </div>

        <div class="absolute">
            These is absolute postion 
        </div>

        <div class="sticky">
            These is sticky postion 
        </div>

        <div class="fixed">
            These is fixed postion 
        </div>

        </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>

    </html>