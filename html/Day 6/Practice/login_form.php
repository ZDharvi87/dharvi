<!DOCTYPE html>

<html lang="en" xml:lang="en">
    <head>
        <title>
            Login form
        </title>
        <meta content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <style> 
    .main2{
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
      <div class="col-lg-9 mt-2" >
       

        <div class="main2 ">

            <form method="post">
                <table class="table w-50" aria-describedby="main2">
                    <tr class="table-warning"> 
                        <th id="log" colspan="2"><strong>Login</strong></th> 
                        
                       
                    </tr>
    
                    <tr>
                        <td> <label for="username"> Username</label><br> </td>
                        <td><input type="text" id="name" name="uname" class="form-control w-50" required><br></td>
                            
                    </tr>
    
                    <tr>
                        <td> <label for="password"> Password</label><br> </td>
                        <td><input type="password" id="p1" name="password"  class="form-control w-50" required><br></td>
                    </tr>

                    <tr>
                       <td></td>
                        <td><input type="Submit" id="b1" name="Submit"  class="btn btn-success" ><br></td>
                            
                    </tr>
                </table>
            </form>
        </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
</html>