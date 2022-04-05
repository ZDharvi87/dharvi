<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <title>City list</title>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="favicon.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    </head>
    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5"  >
          <div class="main2">
        <ul class="mainnav">
               <li> Gujarat 
                   <ul>
                       <li> Ahmedabad</li>
                       <li> Surat</li>
                       <li> Vadodara</li>
                       
                   </ul>
               </li>
        </ul>
        <ul class="mainnav">
            <li> Maharashtra
                <ul>
                    <li> Mumbai</li>
                    <li> Mahabaleshwar</li>
                    <li> Pune</li>
                    
                </ul>
            </li>
     </ul>
     <ul class="mainnav">
        <li> Rajashthan
            <ul>
                <li> Udaipur</li>
                <li> Jaipur</li>
                <li> Ajmer</li>
                <li> Jaisalmer</li>
            </ul>
        </li>
 </ul>
          </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
</html>