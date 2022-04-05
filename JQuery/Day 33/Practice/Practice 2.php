<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice </title>
    <script src="../../../jq/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    
    <style>
      input,label,span{
        margin-left: 5%;
      }
    </style>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5 ms-0" >
     <span class="helptext form-control w-25 ">Help Text</span><br>
    <label class="l1 form-control w-25 ">Please select a langauage:</label><br><br>
    <input type="radio" name="r1" class="PHP me-2 "><label class="php">PHP</label>
    <input type="radio" name="r1" class="net me-2"><label class=".Net">.Net</label>
    <input type="radio" name="r1" class="asp me-2"><label class="ASP">ASP</label>
    <input type="radio" name="r1" class="jsp me-2"><label class="JSP">JSP</label> <br><br>
    <span class="text-success h4" id="ans"></span>​
      <script type="text/javascript">
        $(document).ready(function(){
  $(".helptext").mouseover(function(){
    $(".helptext").hide();
    $("label").show();
  });
  $(".l1").mouseout(function(){
    $(".l1").hide();
    $(".helptext").show("");
  })

});
  $(document).ready(function(){
    $(".PHP").click(function(){
    $("#ans").text("You have Selected :PHP with MySql,HTML,CSS");
    
  });
  $(".net").click(function(){
    $("#ans").text("You have Selected :.Net with JavaScript");
  });
  $(".asp").click(function(){
    $("#ans").text("You have Selected : ASP  with Jquery");
  });
  $(".jsp").click(function(){
    $("#ans").text("You have Selected : JSP  with Tailwind ");
  });

  
  });



      </script>
      </div>
    </div>
  <?php include("../../../footer.php") ?>
  </body>
</html>