<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Assignment</title>
    
  </head>
  <body>
 
    <?php include("../../../header.php") ?>
    
      
     
     <div class="row">
        <div class="col-3">
        <?php include("../../sidebar.php") ?>
        </div>
        <div class="col-9">
        <script type="text/javascript">
var info="";

    fetch("test.json")
        .then(function(resp){
            return resp.json();
        })
        .then(function(data){    
        for(i=0;i<data.length;i++){
    info +="<tr><td>" +data[i].ProductId +"</td><td>" + data[i].ProductName +"</td><td>"+data[i].Price +"</td><td>"
    +data[i].Quantity+"</td></tr>";
}
document.getElementById("details").innerHTML=info;


})//function

function setdata(){
    fetch("test.json")
        .then(function(resp){
            return resp.json();
        })
        .then(function(data){
for(i=0;i<data.length;i++){
    info +="<tr><td>" +data[i].ProductId +"</td><td>" + data[i].ProductName +"</td><td>"+data[i].Price +"</td><td>"
    +data[i].Quantity+"</td></tr>";
}
document.getElementById("details").innerHTML=info;
    
}
    )}
    function print_console(){
    fetch("test.json")
        .then(function(resp){
            return resp.json();
        })
        .then(function(data){ 
            console.log(data)
        });
    }

      </script>


<table class="table table-striped mt-5 mb-3  w-75 ">
    <caption>Product Details</caption>
      <thead class="table-info">
          <tr>
          <th>Product Id</th>
          <th>Product Name</th>
          <th> Price</th>
          <th>Quantity</th>
         
      </tr>
      </thead>
      <tbody id="details" class="">
          
      </tbody>
</table>

<button class="btn btn-primary" onclick="print_console()">Cart Summary</button>
<button class="btn btn-warning" onclick="setdata()">Add to Cart</button>
      </div>
        </div>
     </div>
  <?php include("../../../footer.php")?>

  </body>
</html>