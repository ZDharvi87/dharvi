<!DOCTYPE html>

<html lang="en" xml:lang="en">
    <head>
        <title> Employee Registration form </title>
        <meta content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    

    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2" >
       

          <div class="ms-5">

    
        <form id="emplo_id">
            <table class="table table-striped w-75">
                <caption>Emloyee Regustration form</caption>
                <tr class="table-info">
                    <th><strong>Serial number with label</strong></th>
                    <th><strong>Data input</strong></th>
                </tr>

                <tr>
                    <td> <label for="fname"> Name:</label><br> </td>
                    <td><input type="text" id="name" name="name" class="form-control w-75 h-25 border-3" required><br></td>
                        
                </tr>

                <tr>
                    <td> <label for="Age"> Age:</label><br> </td>
                    <td><input type="number" id="age" name="age" class="form-control w-75 h-25 border-3" required><br></td>
                        
                </tr>

                <tr >
                    <td> <label for="Gender"> Gender:</label><br> </td>
                    <td >male<input type="radio" id="r1" name="radio" class="ms-2" >
                        female<input type="radio" id="r2" name="radio" class="ms-2"><br></td>
                        
                </tr>

                <tr>
                    <td> <label for="designation"> Designation:</label><br> </td>
                    <td><input type="text" id="d1" name="designation" class="form-control w-75 h-25 border-3" required><br></td>
                        
                </tr>

                <tr>
                    <td> <label for="Salary"> Salary:</label><br> </td>
                    <td><input type="number" id="Salary" name="Salary" class="form-control w-75 h-25 border-3" required><br></td>
                        
                </tr>

                <tr>
                    <td><label for="location">Choose location:</label></td>

                     <td><select name="location" id="l1" class="form-control w-75 h-25 border-3">
                         <option value="Vastral">Vastral</option>
                         <option value="Odhav">Odhav</option>
                         <option value="CTM">CTM</option>
                         <option value="Nikol">Nikol</option>
                     </select> </td>
                </tr>

                <tr>
                    <td> <label for="email"> Enter email id:</label><br> </td>
                    <td><input type="email" id="e1" name="email" class="form-control w-75 h-25 border-3" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="e.g: abc@gmail.com" required><br></td>
                        
                </tr>

                <tr>
                    <td> <label for="Date"> Enter date of joining:</label><br> </td>
                    <td><input type="Date" id="d1" name="datej" class="form-control w-75 h-25 border-3" required><br></td>
                        
                </tr>

                <tr>
                    <td> <label for="Con"> Contact number:</label><br> </td>
                    <td><input type="tel" id="t1" name="phone" class="form-control w-75 h-25 border-3" required><br></td>
                        
                </tr>

                <tr>
                    <td> <br> </td>
                    <td><input type="Submit" id="b1" name="Submit" class="btn btn-success w-50" required><br></td>
                        
                </tr>

            </table>

        </form>
          </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
        
    </body>
</html>