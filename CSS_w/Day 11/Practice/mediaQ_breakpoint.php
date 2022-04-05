<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Media Query Intro-Break Point</title>
    <style>
         p{
            border: 5px solid;
            border-color: blue;
            width: 90%;
            margin-left: 5%;
        }
        @media only screen and (max-width:500px){  /* for small screen */
            p {
                border-color: red;
            }
            
        }
        @media only screen and (min-width:700px){  /* for large screen phones */
            p {
                border-color: rgb(255, 208, 0);
            }
            
        }
        @media only screen and (min-width:800px){  /* for  laptop desktop , landscap tablets   */
            p {
                border-color: rgb(0, 255, 21);
            }
            
        }
        @media only screen and (min-width:1200px){  /* for large screen laptop desktop */
            p {
                border-color: rgb(174, 0, 255);
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