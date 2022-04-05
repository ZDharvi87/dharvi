<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Margin and Padding property </title>
   <script src="../../../js/bootstrap.min.js"></script>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
   
   
    </head>
    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2 text-center" >
       <h4>Display Example</h4>
         <h3>Display flex</h3>
            <div class="d-inline-flex">
             <div class="ml-1">Hello</div> <br>
            <div class="mr-1 bg-warning ">How are you?</div><br>
            <div class="mt-0 bg-warning ">Dharvi Zanzrukia</div><br>
            </div> <br>
            <h4>Display - Inline Block</h4>
            <div class="d-inline-block">
                <div class="ml-1">Hello</div> <br>
               <div class="mr-1 bg-info">How are you?</div><br>
               <div class="mt-0 bg-info">Dharvi Zanzrukia</div><br>
               </div> <br>
               <h4>Display Inline flex</h4>
               <div class="d-inline-flex">
                <div class="ml-1">Hello</div> <br>
               <div class="mr-1 bg-primary">How are you?</div><br>
               <div class="mt-0 bg-primary">Dharvi Zanzrukia</div><br>
               </div>
      
      </div>
    </div>
    <?php include("../../../footer.php") ?>     
 
    </body>
</html>