<!DOCTYPE html>
<html lang="en" xml:lang="en">
    <head>
        <title> HR Employee tbl</title>
        <meta content="text/html; charset=utf-8" />
        <meta content="text/html; charset=utf-8" />
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
      <div class="col-lg-9 mt-4" >
       
       
        <div class="main2">
        <form id="HR_id">
            <table class="table table-striped w-75">
                <caption>Display Manager and employee info.</caption>
                <tr class="table-info">
                    <th colspan="3" id="th1"><strong>Employee Under Project Managers</strong> </th>
                </tr>
                <tr class="table-warning">
                    <th id="php"><strong>PHP Project Manager</strong></th>
                    <th id="net"><strong>.Net Project Manager</strong></th>
                    <th id="react"><strong> React Project Manager</strong></th>
                </tr>
                <tr>
                    <td>Om Z</td>
                    <td>Nikum T</td> 
                    <td>Vansh P</td>       
                </tr>
                <tr>
                    <td>Dharvi Z</td>
                    <td>Kishan P</td> 
                    <td>Dhruval T</td>       
                </tr>
                <tr>
                    <td>Jiya D</td>
                    <td>Rudra A</td> 
                    <td>Dhrumil P</td>       
                </tr>
                <tr>
                    <td>Aryan M</td>
                    <td>Abhay R</td> 
                    <td>Nikesh P</td>       
                </tr>
                <tr>
                    <td>Nehal M</td>
                    <td>Riya J</td> 
                    <td>Nikunj R</td>       
                </tr>
                
                </table>
        </form>
        </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
</html>