<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>rectangle</title>
  </head>
  <body>
    <?php include("../../../header.php") ?>
    <div class="row">
        <div class="col-lg-3">
          <?php include("../../sidebar.php") ?>
        </div>
        <div class="col-lg-9 mt-5 justify-center">
        <h2>Using Function Constructor, find the area of rectangle</h2><br>
        <input type="text" id="t1" placeholder="Enter height " class="form-control w-50 ms-5"><br>
        <input type="text" id="t2" placeholder="Enter Width" class="form-control w-50 ms-5"><br>
        <input type="submit" name="Submit" onclick="area()" class="btn btn-success ms-5 text-center"><br>
        <h2 id="res" class="ms-5 mt-3"></h2>

    <script>
        
        
        const area =  function(){
            var h=document.getElementById("t1").value;
            var w=document.getElementById("t2").value;
            var ans =h*w;
            document.getElementById("res").innerHTML="Area of Ractangle is "+"\n"+ ans;
        }
        area();
        
    </script>
        </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>