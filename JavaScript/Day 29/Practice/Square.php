<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Square of Number using Callback</title>
    <style>
        input , #ans{
          margin-left: 20%;
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
      <h2 style="color: blueviolet;">Define a function called callback which receives an argument and prints the square of that number.</h2>
        <input type="number" id="num1" value="" class="form-control w-50"><br>
        <input type="submit" id="btn" onclick="square(print)" class="btn btn-success "><br>
        <h2 id="ans"></h2>
      <script>
        
         function print(ans) {
         document.getElementById("ans").innerHTML ="Square of entered number is" +"\n"+ans;
        }

        function square(callback) {
            var num1 = document.getElementById("num1").value;
        let res = num1 * num1;
        callback(res);
        }

        square(num1,print);
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>