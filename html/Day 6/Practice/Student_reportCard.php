<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <title> Student Report Card </title>
        <meta content="text/html; charset=utf-8" />
        <link rel="Stylesheet"  href=".\CSS\studen.css">
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
        <style>
           .main2{
               margin-left: 14%;
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
        <div class="main2">
        <form id="stu_id">
            <table  class="table table-striped w-75" aria-describedby="main2">
                
                <tr class="table-info fw-bolder fs-5">
                    <td> <label for="fname"> Name:</label><br> </td>
                    <td>Om Zanzrukia<br></td>
                        
                </tr>

                <tr class="table-warning">
                    <td> <label for="Roll no"> Roll no:</label><br> </td>
                    <td>30<br></td>
                        
                </tr>

                <tr class="table-warning">
                    <td> <label for="year"> Year of passing:</label><br> </td>
                    <td>2021<br></td>
                        
                </tr>
                <tr>
                    <td colspan="2"><br> </td>
                    
                        
                </tr>
                <tr>
                    <th  id="mark" colspan="2"> <strong>Marksheet</strong><br> </th>        
                </tr>
                <tr>
                    <th id="sub"><strong>Subject</strong></th>
                    <th id="grade"><strong>Grades</strong></th>
                </tr>
                <tr>
                    <td> <label for="Subject">Computer Vision </label></td>
                    <td>AA<br></td>        
                </tr>
                <tr>
                    <td> <label for="Subject">Machine Learning </label></td>
                    <td>AB<br></td>        
                </tr>
                <tr>
                    <td> <label for="Subject">Graph Theory </label></td>
                    <td>BB<br></td>        
                </tr>
                <tr>
                    <td> <label for="Subject"> Software Project Management </label></td>
                    <td>CC<br></td>        
                </tr>
                <tr>
                    <td> <label for="Overall Grade"> Overall Grade</label></td>
                    <td>AB<br></td>        
                </tr>
                <tr>
                    <td> <label for="Status"> Status</label></td>
                    <td>Pass<br></td>        
                </tr>
                <tr>
                    <td colspan="2"> <label for="greet" class="greet text-success fw-bold fs-5" > Congratulations! you have passed the exam</label></td>
                </tr>
                </table>
        </form>
        </div>
      </div>
    </div>
<?php include("../../../footer.php") ?>
    </body>
</html>