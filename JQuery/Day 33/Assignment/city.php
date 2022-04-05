<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment </title>
    <script src="../../../jq/dist/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"> </script>
    
    
</head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5 ms-0" >
    <br><br>
    <select name="" id="Country"  class="bg-light  h5 form-control w-25 m-auto text-center"  >
      <option value="Please Select" id="op">Please Select Country</option>
      <option value="India" class="india">India</option>
      <option value="UK" class="uk">UK</option>
      <option value="US" class="us">US</option>
      <option value="Canada" class="canada">Canada</option>
      <option value="Australia" class="aus">Australia</option>
    </select><br><br>
    <h6 class="text-center text-warning h5"><span class="text-success h5">Countris:</span>  India || UK || US || Canada || Australia</h6>
    <br><br>
<p class="text-center text-info h3"></p>
    <script type="text/javascript">

      $(document).ready(function(){
        $('select').change(function(){
          $("h6").hide();
        var ans = $('select').val();
        $("p").text("You selected Country" +"\n"+ans);
        if ( $('select').val() == 'Please Select' ) {
            $("h6").show();
           $('p').text("");
        } 
        });

        
       });

    </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>