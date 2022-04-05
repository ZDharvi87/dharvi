<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   
    <title>Module 2 Assignment : Basic_layout</title>
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <script src="../../../js/bootstrap.min.js"> </script>
    <style>
      .header{
    border: 2px solid;
    text-align: center;
    width: 99%;
    height: 60px;
    padding-left: -10px;
    background-color: antiquewhite;
    margin-left: 5px;
    margin-top: 1px;
    margin-right: -6px;
}
.img{
    float: left;
    margin-top: -24px;
}
.main1{
    border: 2px solid;
    text-align: center;
    width: 90%;
    float: left;
    height: 460px;
    padding: 0%;
    background-color: rgb(215, 250, 250);
    margin-left: 120px;
    margin-top: 0px;
    margin-right: -20px;
}
.left_bar{
    border: 2px solid;
    text-align: center;
    width: 20%;
    height: 460px;
    padding: 0%;
    margin-top: 0%;
    margin-left: 5px;
    background-color: rgb(243, 189, 189);    
}

.mainnav{
    display: inline-flex;
    margin-left: -800px;
    margin-top: 0px;
    padding-left: 30%;
    }

.active{
   margin-top: 10px;
   margin-bottom: 20px;
   margin-left:-50px ;
   margin-right: 80px;
   text-decoration: none;
   background-color: rgb(49, 49, 49);    
   color: azure;
   font-size: 17px;
}
a:hover {
    background-color: #ddd;
    color: black;
}

.footer{
    border: 2px solid;
    text-align: center;
    width: 99%;
    height: 61px;
    padding: 0%;
    background-color: antiquewhite;
    margin-left: 4px;
    margin-bottom: 10px;
    
}
      </style>
  
 </head>
 <body>
 
    
     <div class="header">
         Header
         <div class="nav">
             <div class="img"><img src="logo.jpg" alt="logo" width="60" height="59"></div>
            <ul class="mainnav">
                <a class="active" href="home.html"><span>Home</span> </a> 
               <a class="active" href="about.html"><span>About us</span> </a> 
              <a  class="active" href="contact.html"><span>Contact us</span> </a>
            </ul>
         </div>
     </div>
     <div class="main1">
                Main content
     </div>
     <div class="left_bar">
       
    </div>
    <div class="footer">
        footer
    </div>
      </div>
    </div>
    
 </body>
 </html>