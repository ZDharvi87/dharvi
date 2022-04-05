<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Media Query Change Font size</title>
    <style>
        h1{
            border: 5px solid;
            border-color: blue;
            width: 90%;
            margin-left: 5%;
        }
        p{
            border: 5px solid;
            border-color: blue;
            width: 90%;
            margin-left: 5%;
        }
        @media only screen and (max-width:500px){
           h1, p {
                border-color: red;
            }
        }
            @media only screen and (max-width:500px){
            p,h1 {
                font-size: 90%;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
            }
            
        }

        
  
   .main2{
  margin-right: 10%;
  margin-left: 2%;
  }
  
        

    </style>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5"  >
    
    <div class="main2">
      <h1>Hello from Dharvi </h1> 
    
      <p>To acquire a position within the field of Information Technology with a company that will 
        allow me to demonstrate my skills, knowledge, and desire to grow as an individual. I am 
        looking to acquire a position with a company that provides the opportunity for further growth 
        and development within the company.</p>
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
    </html>