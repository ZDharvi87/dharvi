<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="Stylesheet" href="../../../css/bootstrap.min.css"/>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="../../../js/bootstrap.min.js"> </script>
  </head>

  <body>
  <nav class="navbar navbar-expand-sm navbar-light bg-dark position-relative">
    <div class="container-fluid" >
      <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
        <span class="navbar-toggler-icon bg-light border-light"></span>
        </button>
        <div class=" collapse navbar-collapse " id="mynavbar"  aria-labelledby="mynavbar" >
            <ul class="navbar-nav d-flex col-lg-8" aria-labelledby="navcontent">
                <li class="nav-item "><a class="nav-link text-decoration-none text-light link-light" href="#home">Blogen</a></li>
            </ul>
            
        </div>
    </div>
</nav>

<!--Header-->

<header id="main-header" class="bg-primary text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <h1><em class="fa fa-arrow-right"></em>Login</h1>
            </div>
        </div>
    </div>
</header> <br> <br> 

<section id="editor">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml">
                <div class="card bg-light ">
                    <div class="card-header bg-secondary text-white">
                        <em class="fa fa-pencil" ></em> Login
                    </div>
                    <div class=" card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Username</label>
                        <input type="text" class="form-control">
                    </div><br>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" class="form-control">
                    </div><br>
                    
                    
                    <div class="form-group">
                        <a href="../Assignment/admin_panel.php" class="btn btn-success"  type="button" >Login</a>
                    </div>

                </form>
                    </div>
            </div>
            </div>
        </div>
    </div>

</section><br><br><br><br>

<!----------------------------------------Footer-------------------------------------------------->
<footer>
    <div class="container-fluid shadow">
        <div class="row mt-4 bg-dark">
            <div class="col">
             <p class="text-light text-end col-lg-12">copyright &copy; 2022 Blogen</p>
            </div>
        </div>
    </div>
</footer>
  </body>
</html>