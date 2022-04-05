<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Date Validation</title>
    <style>
      input{
        margin-left:25%;
      }
      h3{
        margin-left: 25%;
        margin-top: 3%;
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
          <input type="text" id="in1" placeholder="formate mm-dd-yyyy" class="form-control mb-5 w-25 mt-3"  >
          <input type="submit" name="submit" value="submit" id="btn1" onclick="isvalid()" class="btn btn-primary w-25">

    <script>
        function isvalid(){
            event.preventDefault();
            let text =document.getElementById("in1").value;
            var arr = text.split("-");
           document.getElementById("res").innerHTML ="The date you enter"+"\n"+arr;
           var mn=arr[0];
           var dd=arr[1];
           var year=arr[2];

       
           

           if(mn>0 && dd>0){
               if(mn>12){
                   document.getElementById("res1").innerHTML="Please enter valid month between 1 to 12";
               }
               if(dd>31){
                   document.getElementById("res2").innerHTML="Please enter valid day from 1 to 31";
               }

               else if(mn==4,6,11,9 && dd>30){
                document.getElementById("res2").innerHTML="Please enter valid day from 1 to 30";
               }
               else if(mn==2 && dd>28){
                document.getElementById("res2").innerHTML="Please enter valid day from 1 to 28 / if leap year then till 29";
               }
           }

           else{
            document.getElementById("res3").innerHTML="Please enter valid day from 1 to 31 and Month from 1 to 12";
           }
        }

        

        isvalid();
    </script>
     

      <h3 id="res"></h3>
      <h3 id="res1"></h3>
      <h3 id="res2"></h3>
      <h3 id="res3"></h3>
      <h3 id="res4"></h3>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>