<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Array Operation</title>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5 " id="ans">
      <h2>Try some operation with list like push, pop, shifting, deleting element</h2>
      <h4 id="res"></h4>
      <h4 id="res1"></h4>
      <h4 id="res2"></h4>
      <h4 id="res3"></h4>
      <h4 id="res4"></h4>
      <h4 id="res5"></h4>
      <h4 id="res6"></h4>
      <script>
          const car=['Alto','Swift','Amaze','Celerio','Kia','Grandi10'];
        document.getElementById("res").innerHTML=car.join("*");
        //pop operation
        car.pop();
        document.getElementById("res1").innerHTML=car;
        //push
        car.push("Fortuner");
        document.getElementById("res2").innerHTML=car; 
        //shift
        car.shift();
        document.getElementById("res3").innerHTML=car;
        //unshift
        car.unshift("Creata");
        document.getElementById("res4").innerHTML=car;
        //delete
        delete car[1];
        document.getElementById("res5").innerHTML=car;
        //lenght for push elemnt wihtout push function
        car[car.length]="Baoleno";
        document.getElementById("res6").innerHTML=car;

      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>