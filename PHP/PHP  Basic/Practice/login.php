<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Login form</title>
    <style>
      #emp{
        margin-left: 20%;
        background-color: rgb(252, 252, 252);
       
      }
      label{
        font-weight: bold;
        color: blue;
      }
      p{
        color: brown;
      }
    </style>
  </head>
  <body>
  <?php include("../../../header.php") ?><br>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 ">
    <form id="emp">
        <h4>Login</h4>
    <label >Enter Username</label> <input type="text" id="user" class="form-control w-50 mt-2 border-4 border-black"   placeholder="Enter UserName" required><br>
    <label >Enter password</label> <input type="password" id="pass" class="form-control w-50 mt-2 border-4 border-black"   placeholder="Enter Password" required><br>
  
    
    <input type="Submit" id="btn" onclick="valid()" class="btn btn-success w-50  mt-2"><br>
      <input type="reset" id="btn1" class="btn btn-warning  mt-2 w-50" onclick="clear()" >
    </form>
    <script>
        function clear(){
        emp.reset();
    }
function valid(){
    var email = document.getElementById("user").value;
        let rem;
       if ( rem =email.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/g)){

       }
       else{
       alert("Enter a valid Username !");
       }
       }
     </script>
      </div>
    </div>
  </body>
</html>