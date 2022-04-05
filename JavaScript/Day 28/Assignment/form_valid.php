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
      <div class="col-lg-9 mt-5">
    <form id="emp">
      <h2>Employee registration form</h2>
      <label>Enter EmployeeId</label> <input type="number" id="eid" minlength="5"  placeholder="Please enter a 5 digit number"  class="form-control w-50 mt-2 border-4 border-black" required>
      <p id="res"></p>
      <label >Enter Name</label> <input type="text" id="name" class="form-control w-50 mt-2 border-4 border-black"   placeholder="Enter Name" required><br>

      <label >Enter Age</label>     <input type="text" id="age" class="form-control w-50 mt-2 border-4 border-black"  placeholder="Enter age" required>
      <p id="res1"></p>
      <label >Chosse Gender</label>
      <input type="radio" id="male" name="Gender" value="Male">
      <label  class="text-black">Male</label>
      <input type="radio" id="female" name="Gender" value="Female">
      <label class="text-black">Female</label><br><br>

      <label >Chosse Deignation</label><select name="des" id="des" class="form-control w-50 mt-2 border-4 border-black">
        <option value="Project Manager">Project Manager</option>
        <option value="Employee">Employee</option>
        <option value="CEO">CEO</option>
        <option value="Intern">Intern</option>
      </select><br>

      <label >Enter Salary</label> <input type="number" id="sala" class="form-control w-50 mt-2 border-4 border-black"   placeholder="Enter Salary" required><br>
    
      <label >Enter Email</label>     <input type="text" id="em" class="form-control w-50 mt-2 border-4 border-black"   placeholder="abc12@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
      <p id="res2"></p>
      <label >Enter Date of joining</label> <input type="text" id="in1" class="form-control w-50 mt-2 border-4 border-black" placeholder="formate dd-mm-yyyy"  >
      <p id="res3"></p>
      <label >Chosse Location</label><select name="City" id="city" class="form-control w-50 mt-2 border-4 border-black">
        <option value="Ahmedabad">Ahmedabad</option>
        <option value="Surat">Surat</option>
        <option value="Kutch">Kutch</option>
        <option value="Rajkot">Rajkot</option>
      </select><br>
      
      
      
      
      
      
      <input type="Submit" id="btn" onclick="valid()" class="btn btn-success w-50  mt-2"><br>
      <input type="reset" id="btn1" class="btn btn-warning  mt-2 w-50" onclick="clear()" >
    </form>
    <script>
        function valid(){
            //employee id
            var e = document.getElementById("eid").value;
            let result = e.match(/ddddd/);
            //age

            if(e.length<5){

            
              document.getElementById("res").innerHTML="<h5>Please write 5 digit id !!</h5>";
            }

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
             
    }
    function clear(){
      emp.reset();
    }
    </script>
      </div></div>
      
   
    
    
  </body>
</html>