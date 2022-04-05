<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Module 2  multiple divison Practice</title>
    <style>
        .main1{
            border: 10px solid;
            margin-top: 80px;
            padding-top: 0px;
            height: 300px;
            padding-right: 0.12px;
            padding-left: 30px;
            width: 70%;
           margin-left: auto;
           margin-right: auto;
           
        }
        .c1{
            border: 2px double;
            text-align: center;
            margin: 1.5%;
            display: inline-block;
            height: 200px;
            width: 21%
           
            
            
        }
        .c2{
            border: 2px double;
            text-align: center;
            margin: 10%;
            display: inline-block;
            height: 200px;
            width: 20%;
            margin-top: 8%;
            
            

        }
        .c3{
            border: 2px double;
            text-align: center;
            margin: 1.5%;
            display: inline-block;
            height: 200px;
            width: 20%;
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
      <div class="main1">
          <div class="c1">
              Hello
          </div>
          <div class="c2"> 
              How are You ?
          </div>
          <div class="c3">
              Good evening !
          </div>
      </div>
      </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>
