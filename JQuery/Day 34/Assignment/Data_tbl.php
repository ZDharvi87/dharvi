<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Assignment </title>
    <script src="../../../jq/dist/jquery.min.js"></script>
    <script src="../../../js/bootstrap.min.js"> </script>
    <style>
      table{
        margin-left: -5%;
      }
    </style>
    
</head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-1 ms-0" >
      <table id="tab1" class="table table-striped text-center w-100 ">
          <caption>User Data</caption>
<tr class="table-info b-2">
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>status</th>
</tr>
      </table>


      <script type="text/javascript">
          $(document).ready(function(){
              $.getJSON(" https://gorest.co.in/public-api/users",function(data,status){
                  //console.log(data);
                 $.each(data.data,function(index,data){
                   
                     var {id,name,email,gender,status}=data;
                     $("#tab1").append(`<tr><td>${id}</td><td>${name}</td><td>${email}</td><td>${gender}</td><td>${status}</td></tr>`);
                 })
              })
          })
      </script>
      </div>
    </div>
    <?php include("../../../footer.php") ?>
  </body>
</html>