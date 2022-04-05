<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Module 3 Flex-images excercies</title>
    <style>
        .img{
            height: 200px;
            width: 300px;
            margin-top: 30px;
            margin-left: 20px;
            border: 15px solid black;
            
        }
        .column{
            display: flex;
            flex-direction: column;
            margin-left: 250px;
            margin-right: -230px;
        }
        .row{
            flex-wrap: wrap;
            display: flex;
        }
       body{
           background-image: linear-gradient(to bottom,rgb(197, 219, 230),rgba(139, 245, 187, 0.911)
            ) ;
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
              <img src="img1.jpg"  alt="flex_image" class="img"> 
              <img src="img2.jpg"  alt="flex_image" class="img"> 
              <img src="img3.jpg"  alt="flex_image" class="img"> 
              <img src="img4.jpg"   alt="flex_image" class="img"> 
          </div>
          <div class="column">
            <img src="img4.jpg"  alt="flex_image" class="img"> 
            <img src="img3.jpg"   alt="flex_image" class="img">
            <img src="img2.jpg"   alt="flex_image" class="img">
            <img src="img1.jpg"  alt="flex_image" class="img"> 
         </div>
      </div>
      </div>
  </body>
</html>