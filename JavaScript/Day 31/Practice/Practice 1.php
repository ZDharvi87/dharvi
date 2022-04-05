<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
   
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Practice 1</title>
    <style>
       
    </style>
  </head>
  <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
      <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5 text-success">
      <h2>Store following JSON data into localstorage,read that data and print it into console.</h2>
        <h2>Output in console</h2>
      <script type="text/javascript">
let data = {  products :

[{ Name: "Cheese",
   Price : 2.50,
     Location: "Refrigerated foods"},

{ Name: "Crisps",
 Price : 3, 
 Location: "the Snack isle"},

{ Name: "Pizza", 
 Price : 4, 
 Location: "Refrigerated foods"},

{ Name: "Chocolate", 
Price : 1.50,
 Location: "the Snack isle"},

{ Name: "Self-raising flour", 
Price : 1.50, 
Location: "Home baking"},

{ Name: "Ground almonds", 
Price : 3, 
Location: "Home baking"}

]}

const pro = JSON.stringify(data);
localStorage.setItem("testJSON", pro);

// Print the  data
let text = localStorage.getItem("testJSON");
let obj = JSON.parse(text);
console.log(obj.products);
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>