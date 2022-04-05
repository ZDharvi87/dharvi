<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Function Call</title>
    <style>
       input , #res{
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
      <h2>Function call create employee object with field Name,
           Address and Designation and pass it to function.</h2><br>
           <input type="text" id="t1" placeholder="Enter Name " class="form-control w-50"><br>
           <input type="text" id="t2" placeholder="Enter Address "  class="form-control w-50"><br>
           <input type="text" id="t3" placeholder=" Designation"  class="form-control w-50"><br>
           <input type="button" value="Submit" name="Submit" onclick="info()"  class="btn btn-success"><br>
           <h2 id="res" style="color: chocolate;"></h2>
    <script>
        function info(){
            var employee ={
                information:function(){
                    return "Employee Name==" + "\n"+ this.Name +"<br>"+ "Employee Address ==" +"\n"+ this.address +"<br>"+ "Designation==" +"\n"+this.designation;
                }
            }
            var employee1={
                Name:document.getElementById("t1").value,
                address:document.getElementById("t2").value,
                designation:document.getElementById("t3").value
            }
            document.getElementById("res").innerHTML =employee.information.call(employee1);
        }


    </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>