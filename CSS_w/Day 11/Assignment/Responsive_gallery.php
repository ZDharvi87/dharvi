<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Module 3 Flex-images excercies</title>
    <style>
        .img{
            height: 200px;
            width: 400px;
            float: left;
            margin-top: 30px;
            border: 15px solid black;
        }
        .img1{
            height: 300px;
            width: 300px;
            margin-top: 30px;
            border: 15px solid black;
            display: inline-flex;
        }
        
        .column{
            display: flex;
            flex-direction: column;
            margin-left: 10%;
            margin-right: auto;
            padding-left: 5px;
        }
        .row{
            flex-wrap: wrap;
            display: flex;
        }
       body{
           background-image: linear-gradient(to bottom,rgb(197, 219, 230),rgba(139, 245, 187, 0.911)
            ) ;
       }

       @media screen and (max-width:800px) {
           .column{
              margin-left: auto;
              margin-right: auto;
               width: 60%;
           }
           
       }
       @media screen and (max-width:550px) {
           .column{
              margin-left: 10px;
              margin-right: 50px;
               width: 50%;
               height: 40%;
           }
           
       }
     
  
   .main2{
  flex: 70%;
  overflow: auto;
  margin-left: 1%;
  }
  
    </style>
  </head>
  <body>
   
      <div class="main2">
      <div class="row">
          <div class="column">
              <img src="img1.jpg"  alt="Responsive Gallery" class="img"> 
              <img src="img2.jpg"  alt="Responsive Gallery" class="img1"> 
              <img src="img3.jpg"  alt="Responsive Gallery" class="img1"> 
              <img src="img4.jpg"  alt="Responsive Gallery" class="img1"> 
          </div>
          <div class="column">
            <img src="img4.jpg" alt="Responsive Gallery" class="img1"> 
            <img src="img3.jpg"  alt="Responsive Gallery" class="img1">
            <img src="img2.jpg" alt="Responsive Gallery" class="img1">
            <img src="img1.jpg"  alt="Responsive Gallery" class="img1"> 
         </div>
      </div>
      </div>
  </body>
</html>