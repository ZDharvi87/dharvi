<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <title>Promises</title>
    <style>
        input , #re{
       margin-left: 20%;
        }
    </style>
  </head>
  <body>
  <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-5">
<h2 style="color: blueviolet;">Make a function that takes in a single parameter and returns a new promise. using setTimeout, after 500 milliseconds, the promise will either resolove or reject. if the input is a string, the promise resolves with that reverse string </h2><br>
 <input type="text" id="t1" value="" class="form-control w-50" placeholder="Enter The Text"><br>
  <input type="submit" onclick="test()" class="btn btn-success">
<p id="re" class="h2 text-warning"></p>


<!-----Script-->
  <script>

function test(){
      const myPromise = new Promise(function(myResolve, myReject) {
    setTimeout(function(){ 
        let text=document.getElementById("t1").value; 
     
        if(typeof(text=="string")){
        ans=text.split("").reverse().join("");
        myResolve("reverse string output of String ="+"\n"+ans); }
    else{
        myReject("wrong Input")
    }}, 500);
});

myPromise.then(function(value) {
  document.getElementById("re").innerHTML = value;
});
}

    


    
  </script>

      </div>
    </div>
    <?php include("../../../footer.php") ?>


</body>
</html>