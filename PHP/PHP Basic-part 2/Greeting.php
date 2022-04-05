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
    
 
    <h3>Choose option from 1 to 5</h3>
    
     
    <form method="post">
        <table class="table">
            <tr>
                
                <td> <input type="text" name="name"
                    value="" class="input-group w-50" placeholder="Your Name"/>
                </td>
            </tr>
 
 
            <tr>
                <td> <select name="option">
                    <option>Select the Number</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </td>
            </tr>
            <tr>
                <td><input type="Submit" class="btn btn-success" name="submit"></td>
            </tr>
        </table>
    </form>

 
<?php
 

if(isset($_POST['submit'])) {
 
    
    $name = $_POST['name'];
 
    
   
 
    
    $ch = $_POST['option'];
 
    switch($ch) {
        case 1:
 
            
          
            echo "<h4 class=text-info> Welcome $name </h4>" ;
            break;
 
        case 2:
 
            
           
            echo " <h4 class=text-warning> How are you?  $name </h4>" ;
            break;
 
        case 3:
 
            
            echo "<h4 class=text-success> I am doing well ,Thank you </h4>"  ;
            break;
 
        case 4:
 
           
            echo "<h4 class=text-primary> Have a nice day $name </h4>" ;
            break;

        case 5:
            
            echo "<h4 class=text-dark> Good bye </h4>";
            break;
        default:
 
            echo "<h4 class=text-danger>invalid option </h4>";
    }
     
    return 0;
}
?>
      </div>
     
    </div>
   
</body>
</html>
<?php include("../../footer.php") ?> 