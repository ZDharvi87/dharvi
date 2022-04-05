<?php $url= "http://".$_SERVER['SERVER_NAME']."/2458-Dharvi-Feb22" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculator </title>
    <script src="../../jq/dist/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"> </script>
   
</head>
  <body>
  <?php include("../../header.php") ?><br>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../sidebar.php") ?>
      </div>
      <div class="col-lg-9 ">
 
   
     
    <form method="post">
        <table class="table">
            <tr>
                
                <td> <input type="number" name="num1"
                class="form-control w-50" value="" placeholder="Enter value 1"/>
                </td>
            </tr>
 
            <tr>
            
            <td> <input type="numbers" name="num2" value=""
            class="form-control w-50"  placeholder="Enter value 2"/>
                </td>
            </tr>
 
            
 
            <tr>
                <td>  <input type="radio" name="operator" value="1"> Addition
                        <input type="radio" name="operator" value="2"> Substraction
                        <input type="radio" name="operator" value="3"> Multiplication
                        <input type="radio" name="operator" value="4"> Divison
                        <input type="radio" name="operator" value="5"> Square Root
                        <input type="radio" name="operator" value="6"> Square
                        <input type="radio" name="operator" value="7"> Modulus
                        <input type="radio" name="operator" value="8"> Factorial
                       
                </td>
            </tr>
            <tr>
                <td>
                <input type="Submit" name="submit" class="btn btn-success"/> </td>
            </tr>
        </table>
    </form>
        <?php
 

 if(isset($_POST['submit'])) {
  
     
     $a = $_POST['num1'];
  
     
     $b = $_POST['num2'];
  
     
     $ch = $_POST['operator'];
  
     switch($ch) {
         case 1:
  
             
             $answer = $a + $b;
             echo "<h4 class=text-success> Addition of two numbers = $answer </h4>";
             break;
  
         case 2:
  
             
             $answer = $a - $b;
             echo " <h4 class=text-success>Subtraction  of two numbers= $answer </h4>" ;
             break;
  
         case 3:
  
             
             $answer = $a * $b;
             echo " <h4 class=text-success>S Multiplication of two numbers =$answer</h4> ";
             break;
  
         case 4:
  
             $answer = $a / $b;
             echo " <h4 class=text-success> Division of two numbers = $answer </h4>" ;
             break;
 
         case 5:
             $answer=sqrt($a);
             
             echo" <h4 class=text-success>square answer of a is : $answer </h4>";
             break;
 
         case 6:
             $answer= $a* $a;
             echo " <h4 class=text-success>Square of a is : $answer </h4>";
             break;
         
         case 7:
            $answer= $a%2;
             echo " <h4 class=text-success>Modulus of number: $answer </h4>";
             break;

              
         case 8:
            $answer=1;
            for($i=$a;$i>=1;$i--){
                $answer=$answer * $i;
            }
             echo " <h4 class=text-success>Factorial of number: $answer </h4>";
             break;
  
         default:
  
             echo " <h4 class=text-danger>invalid option</h4>";
     }
      
     return 0;
 }
 
    ?>
   
    
  
      </div>
     
     
     
    </div>
  
    <?php  include("../../footer.php") ?>
  </body>
</html>



