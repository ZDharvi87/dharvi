<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mizuxe</title>
    <link rel="Stylesheet" href="../../../css/bootstrap.min.css"/>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="module4.css">
      <script src="../../../js/bootstrap.min.js"> </script>
  </head>

  <body>
  <nav class="navbar navbar-expand-sm navbar-light  position-relative">
    <div class="container-fluid" >
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <img src="mlogo.png" alt="" height="40"  class=" ml-5 col-lg-1">
        <a href="#" class="navbar-brand col-lg-8">Mizuxe</a>
        <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <ul class="navbar-nav d-flex  " aria-labelledby="navcontent">
                <li class="nav-item "><a class="nav-link text-decoration-none link-dark" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link text-decoration-none  link-dark" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link text-decoration-none  link-dark" href="#meet">Authors</a></li>
                <li class="nav-item"><a class="nav-link text-decoration-none  link-dark" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<br><br>
<!--book image 1st section-->
<section id="showcase" class="py-1 mt">
  <div class="primary-overlay text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6">
          <h1 class="display-2 mt-5 pt-5">
            So what You dream of....
          </h1>
          <p class="lead">One of the oldest forms of knowledge providers are books;
             therefore, they are also called the powerhouse of knowledge and information.</p>
             <a href="#"  class="btn btn-secondary btn-lg text-white">
               <em class="fa fa-arrow-right"></em>Read More
             </a>
        </div>
        <div class="col-lg-6">
          <img src="book.png" alt=""  class="img-fluid d-none d-lg-block" id="img1" >
        </div>
      </div>
    </div>
  </div>
</section>
<!--information -->
<section id="newsletter" class="bg-dark text-white py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4 mt-2">
        <input type="text" class="form-control form-control-lg" placeholder="Enter Name">
      </div>    
      <div class="col-md-4 mt-2">
        <input type="email" class="form-control form-control-lg" placeholder="Enter email">
      </div>   
      <div class="col-md-4 mt-2">
        <button class="btn btn-primary btn-lg  btn-block"><em class="fa fa-envelope-open-o"></em>Subscriber</button>
      </div>
    </div>
  </div>
</section>
<!--Cards -->
<section id="boxex" class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card text-center border-primary">
          <div class="card-body">
            <h3 class="text"> Be better</h3>
            <p class="text-muted"> they are also called the powerhouse of knowledge and information.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center border-primary " > 
          <div class="card-body">
            <h3 class="text"> Be Faster</h3>
            <p class="text-muted"> they are also called the powerhouse of knowledge and information.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center border-primary">
          <div class="card-body">
            <h3 class="text"> Be Smarter</h3>
            <p class="text-muted"> they are also called the powerhouse of knowledge and information.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-center border-primary " id="b1">
          <div class="card-body">
            <h3 class="text"> Be Strong</h3>
            <p class="text-muted"> they are also called the powerhouse of knowledge and information.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About-->
<section id="about" class="  shadow text-dark py-5">
  <div class="container ml-5">
    <div class="row">
      <div class="col">
        <div class="info-header mb-5">
          <h1 class="text pb-5 text-center">
            Why this book?
          </h1>
          <p class="lead pb-3 text-center mr-5">
            they are also called the powerhouse of knowledge and information.
          </p>
        </div>
      </div>    
    </div>
  </div>
</section>
<!--Accordion-->
<div id="accordion" role="tablist">
  <div class="card">
    <div class="card-header" id="heading1">
      <h5 class="mb-0 text-center">
        <div href="#collapse1" data-bs-toggle="collapse" data-parent="#accordion">
          <em class="fa fa-arrow-circle-down "></em> Get inspired
        </div>
      </h5>
    </div>
    <div id="collapse1" class="collapse show">
      <div class="card-block">
        Creating a prototype website that also contains copy and images is the only way to help the client understand what the concept behind your design is. Without these elements, the finished product can look quite odd,
         and the client won’t be able to mentally project his own content uploaded on the site.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading2">
      <h5 class="mb-0 text-center">
        <div href="#collapse2" data-bs-toggle="collapse" data-parent="#accordion">
          <em class="fa fa-arrow-circle-down "></em> Gain the knowledge
        </div>
      </h5>
    </div>
    <div id="collapse2" class="collapse show">
      <div class="card-block">
        Creating a prototype website that also contains copy and images is the only way to help the client understand what the concept behind your design is. Without these elements, the finished product can look quite odd,
         and the client wont be able to mentally project his own content uploaded on the site.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="heading3">
      <h5 class="mb-0 text-center">
        <div href="#collapse3" data-bs-toggle="collapse" data-parent="#accordion">
          <em class="fa fa-arrow-circle-down "></em> Open your mind
        </div>
      </h5>
    </div>
    <div id="collapse3" class="collapse show">
      <div class="card-block">
        Creating a prototype website that also contains copy and images is the only way to help the client understand what the concept behind your design is. Without these elements, the finished product can look quite odd,
         and the client wont be able to mentally project his own content uploaded on the site.
      </div>
    </div>
  </div>

</div>

<!--Authors-->
<section id="meet" class="py-1">
    <div class="container">
      <div class="row text-center">
        <div class="col">
          <div class="info-header">
            <h1 class="text pb-5 text-center">
              Meet Authors
            </h1>
            <p class="lead pb-3 text-center mr-5">
              They are also called the powerhouse of knowledge and information.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="person1.jpg" alt="" class="img-fluid rounded-circle" id="img2" width="50" height="30">
                <h3>Susan Williams</h3>
                <h5 class="text-muted">Lead Writer</h5>
                <p>ne of the oldest forms of knowledge providers are books;
                  therefore, they are also called the powerhouse of knowledge and information</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><em class="fa fa-facebook"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-twitter"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-instagram"></em></a>
                    </div>
                    
                  </div>
              </div>
            </div>
          </div>
          <!--2nd card-->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="person2.jpg" alt="" class="img-fluid rounded-circle" id="img2" width="50" height="30">
                <h3>Grace Smith</h3>
                <h5 class="text-muted">Co-Writer</h5>
                <p>ne of the oldest forms of knowledge providers are books;
                  therefore, they are also called the powerhouse of knowledge and information</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><em class="fa fa-facebook"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-twitter"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-instagram"></em></a>
                    </div>
                    
                  </div>
              </div>
            </div>
          </div>
          <!--3rd card-->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="person3.jpg" alt="" class="img-fluid rounded-circle" id="img2" width="50" height="30">
                <h3>John deo </h3>
                <h5 class="text-muted">Editor</h5>
                <p>ne of the oldest forms of knowledge providers are books;
                  therefore, they are also called the powerhouse of knowledge and information</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><em class="fa fa-facebook"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-twitter"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-instagram"></em></a>
                    </div>
                    
                  </div>
              </div>
            </div>
          </div>
          <!--Forth card-->
          <div class="col-lg-3 col-md-6">
            <div class="card">
              <div class="card-body">
                <img src="person4.jpg" alt="" class="img-fluid rounded-circle" id="img2" width="50" height="30">
                <h3>Kevin Swanson </h3>
                <h5 class="text-muted">Designer</h5>
                <p>ne of the oldest forms of knowledge providers are books;
                  therefore, they are also called the powerhouse of knowledge and information</p>
                  <div class="d-flex flex-row justify-content-center">
                    <div class="p-4">
                      <a href="#"><em class="fa fa-facebook"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-twitter"></em></a>
                    </div>
                    <div class="p-4">
                      <a href="#"><em class="fa fa-instagram"></em></a>
                    </div>
                    
                  </div>
              </div>
            </div>
          </div>
        </div>

        </div>
      
    </div>
</section>

<!--contact us-->
<section id="contact" class="bg-light py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <h3>Get In touch</h3>
        <p class="lead">
          therefore, they are also called the powerhouse of knowledge and information
        </p>
        <form>
          <div class="form-group">
            <div class="input-group input-group-lg">
              <span class="input-group-text"><em class="fa fa-user"></em></span>
              <input type="text" class="form-control" placeholder="name">
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="input-group input-group-lg">
              <span class="input-group-text"><em class="fa fa-envelope"></em></span>
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="form-group mt-2">
            <div class="input-group input-group-lg">
              <span class="input-group-text"><em class="fa fa-pencil"></em></span>
              <textarea class="form-control" placeholder="Address"></textarea>
            </div>
          </div>
          <button class="btn btn-success mt-2 btn-lg w-100">Submit</button>
        </form>
      </div>
      <div class="col-lg-3 align-self-center">
        <img src="mlogo.png" class="img-fluid" alt="">
      </div>
    </div>
  </div> 

</section>
<footer>
  <div class="container">
      <div class="row">
          <div class=" text-center">
  
                  <p class="lead">copyright &copy; 2022</p>
                  
              </div>
          </div>
      </div>
  
</footer>
</body>
</html>