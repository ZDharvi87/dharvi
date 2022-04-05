<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Gretaer Number with js</title>
    <style>
      p{
        text-align: center;
      }
      </style>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5" >
        <p id="ans" class="text-info fs-4 "></p>
        <p id="res"></p>
    <script type="text/JavaScript">
        var num1 =parseInt (prompt("enter the 1st number"));
        var num2 = parseInt(prompt("enter the 2nd number"));
        var num3 = parseInt(prompt("enter the 3rd number"));
        var result;

       
            if(num1>=num2  && num1>num3)
                document.getElementById("ans").innerHTML="num1 is large" +"\n" +"num1 is ="+ num1;

            else if(num2>=num1 && num2>num3)
            document.getElementById("ans").innerHTML="num2 is large" +"\n" +"num2 is ="+ num2;
            else
            document.getElementById("ans").innerHTML="num3 is large" +"\n"+"num3 is ="+ + num3;

            

            if(num1 > 40 && num2>40){
                result=num1+num2;
                document.getElementById("res").innerHTML="sum of num1 and 2"+"\n" + result;
            }
               
            
          else  if(num2 > 40 && num3>40){
                result=num2+num3;
                document.getElementById("res").innerHTML="sum of num 2 and 3"+"\n" + result;
            }

            else{
                result= num1+num3;
                document.getElementById("res").innerHTML="sum of num 1 and 3"+"\n" + result;
            }
          
       
    </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>