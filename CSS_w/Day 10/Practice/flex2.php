<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Module 3 Flex excercies</title>
    <style>
        .flex-con{
            border: 2px solid;
            display: flex;
            padding: 40px;
            margin-left: 10%;
            margin-right: auto;
            background-color: rgb(173, 209, 240);
            
            justify-content: flex-end;
            width: 70%;
            
        }
        .flex-con > div{
            border: 3px  solid;
            display: flex;
            padding: 40px;
            background-color: rgb(201, 201, 37);
            margin: 20px;
        }
        body{
            background-color: rgb(248, 248, 232);
        }
       
   .main2{
  flex: 70%;
  overflow: auto;
  padding-left: 20%;
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
    <h1>Flex box container with  flex items –right to left direction </h1>
     <div class="flex-con">
             <div>Item 1</div>
             <div>Item 2</div>
             <div>Item 3</div>
     </div>
    </div>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
</body>
</html>