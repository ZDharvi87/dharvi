<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Practice 2</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
   
  </head>
  <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php")?>
      </div>
      <div class="col-lg-9 mt-5">
      <h2>Using Web Fetch API read that data.</h2>
      <h3 id="res" style="color: rgb(15, 83, 114);"></h3>
      
      <script type="text/javascript" >
         getdata();

    async function getdata() {
  let data = await fetch('test.json');
  let result = await data.text();
  document.getElementById("res").innerHTML = result;
}
  
    </script>
    </div>
  </div>
  <?php  include("../../../footer.php") ?>
  </body>
</html>