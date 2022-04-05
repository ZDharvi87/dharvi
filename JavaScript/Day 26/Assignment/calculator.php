<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Calculator</title>
    <style>
      #cal{
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
      <div class="col-lg-9 mt-5" >
        <div id="cal">
      <h2 class="text-info">Calculator</h2>
          <label>Please enter 1st number</label>  <input type="number" name="num1" id="num1" placeholder="Enter the 1st number" class="form-control w-50">
          <br> <br>
          <label>Please enter 2nd number</label>  <input type="number" name="num2" id="num2" placeholder="Enter the 1st number" class="form-control w-50">
          <br><br>
          <label>Please select operation ::</label>
          <input type="radio" name="r" id="add" value="add" >Addition
          <input type="radio" name="r" id="sub" value="sub" >Substraction
          <input type="radio" name="r" id="mul" value="mul" >Multiplication
          <input type="radio" name="r" id="div" value="div" >Division
        <br> <br>
        <input type="submit" id="sub1" value="Submit" onclick="cal()" class="btn btn-success"> <input type="reset" class="btn btn-warning"> <br>
        <br>
 
  <h4 id="res"></h4>
  <script>
      
         function cal(){
        var a =Number(document.getElementById("num1").value);
        var b = Number(document.getElementById("num2").value);
        var result;

                if(document.getElementById("add").checked){
                    result= a+b;
                   document.getElementById("res").innerHTML="Result is"+"="+result;
                   
                }

             else if(document.getElementById("sub").checked){
                    result= a-b;
                    document.getElementById("res").innerHTML= "Result is"+"="+result;
                }

                else if(document.getElementById("mul").checked){
                    result= a*b;
                    document.getElementById("res").innerHTML="Result is"+"="+result;
                }
                else if(document.getElementById("div").checked){
                    result= a/b;
                    document.getElementById("res").innerHTML="Result is"+"="+result;
                }
                else{
                    document.write("nothing")
                }

            }
           

  </script>
      </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>