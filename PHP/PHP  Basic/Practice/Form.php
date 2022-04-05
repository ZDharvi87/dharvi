<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Form Validation</title>
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
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 ">
    <form id="emp" >
      <h2 class="mt-4">Employee registration form</h2>
     
      <label >Enter FirstName</label> <input type="text" id="name" class="form-control w-50 mt-2 border-4 border-black"   placeholder="Enter First Name" required><br>
      <label >Enter LastName</label> <input type="text" id="name" class="form-control w-50 mt-2 border-4 border-black"   placeholder="Enter last Name" required><br>

      <label >Enter Age</label>     <input type="text" id="age" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter age" required>
      <p id="res1"></p>
    
      <label >Enter Email</label>     <input type="text" id="em" class="form-control w-50 mt-2 border-4 border-black"   placeholder="abc12@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
      <p id="res2"></p>
      <label >Enter Date of birth</label> <input type="date" id="in1" class="form-control w-50 mt-2 border-4 border-black" placeholder="formate dd-mm-yyyy"  >
      <p id="res3"></p>
      <label >Enter Contact Number</label>     <input type="Number" minlength="10" maxlength="10" id="num" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter Phone Number" required>
      <p id="res4"></p>
      <label >Enter Address</label>     <textarea type="text" id="address" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter Address" required></textarea>
      
      <label >Enter Post code</label>     <input type="Number" id="post" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter Post code" required>

      <label >Enter  City</label>     <input type="text" id="city" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter City" required>
      <label >Enter State </label>     <input type="text" id="State" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter State" required>
      <label >Enter Country </label>     <input type="text" id="count" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter Country" required>
      
      
      
      <input type="Submit" id="btn" onclick="valid()" class="btn btn-success w-50  mt-2"><br>
      <input type="reset" id="btn1" class="btn btn-warning  mt-2 w-50" onclick="clear()" >
    </form>
    <script>
        function valid(){
          

        //Age number
            var a=Number(document.getElementById("age").value);
            if (isNaN(a) || a=="") {
              document.getElementById("res1").innerHTML= `<h5>Please write age in digit !!</h5>`;
                    }
  
        //email
        var email = document.getElementById("em").value;
        let rem;
       if ( rem =email.match(/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/g)){

       }
       else{
        document.getElementById("res2").innerHTML="<h5>Enter a valid email !!</h5>";
         
       }
    
        // date 
        var dt=document.getElementById("in1").value;
        let pattern=/\d\d-\d\d-\d\d\d\d/;
        if(pattern.test(dt)){

        }
         else{
            document.getElementById("res3").innerHTML= "<h5 >Enter a valid Date !!</h5 >";
         }  
       //phone  
         var phone = document.getElementById("num").value
             var regEx = /d{3}[\-]\d{3}[\-]\d{4}/;
            if(regEx.test(phone))
             {
      
            }
            else
             {
        document.getElementById("res4").innerHTML= "<h5 >Enter a valid Phone number !!</h5 >";
             }
        }
    function clear(){
      emp.reset();
    }
    </script>
      </div></div>
      
   
    
    
  </body>
</html>