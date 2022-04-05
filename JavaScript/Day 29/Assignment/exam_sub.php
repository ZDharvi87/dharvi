<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Exam is Auto Submitted</title>
    <style>
        input{
          text-align: center;
          margin-left:20% ;
        }
    </style>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5">
        <h2 style="margin-left: 20%;">Mumbai University Exam</h2><br>
        <h4 id="res"></h4>
        <form id="test" name="test" method="post" class="form-group">
          <input type="text" class="form-control w-50"><br><br>
          <input type="text" class="form-control w-50"><br><br>
          <input type="text" class="form-control w-50"><br><br>
          <input type="text" class="form-control w-50"><br><br>
          <input type="submit" value="Submit" class="btn btn-success ">
        </form>
    <script> 

var auto = setInterval(
    function()
    {
    exam();
    }, 7000);

    function exam()
    {
      alert("Your Exam is Submitted Successfully");
      document.test.submit();
    }
</script>
      </div>
    </div>
  <?php include("../../../footer.php") ?>
  </body>
</html>