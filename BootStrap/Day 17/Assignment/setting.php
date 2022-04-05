<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Setting</title>
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
                <li class="nav-item"><a class="nav-link text-decoration-none text-light link-dark" href="../Assignment/admin_panel.php">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link text-decoration-none text-light link-dark" href="../Assignment/post.php">Posts</a></li>
                <li class="nav-item"><a class="nav-link text-decoration-none text-light link-dark" href="../Assignment/cat.php">Categoris</a></li>
                <li class="nav-item"><a class="nav-link text-decoration-none text-light link-dark" href="../Assignment/user.php">Users</a></li>
            </ul>
            <ul class="navbar nav ml-auto">
                <li class="nav-item dropdown mr-3">
                    <a href="#" class="nav-link dropdown-toggle text-decoration-none text-light" data-bs-toggle="dropdown">
                        <em class="fa fa-user"></em> Welcome brad
                    </a>
                    <div class="dropdown-menu">
                        <a href="../Assignment/profile.php" class="dropdown-item text-decoration-none text-dark">
                            <em class="fa fa-user-circle"></em> Profile
                        </a>
                        <a href="../Assignment/setting.php" class="dropdown-item text-decoration-none text-dark">
                            <em class="fa fa-cog"></em> Setting
                        </a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="../Assignment/login.php" class=" nav-link text-decoration-none text-light">
                        <em class=" fa fa-sign-out"></em> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Header-->

<header id="main-header" class="bg-primary text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <h1><em class="fa fa-cog"></em>Detail Editor</h1>
            </div>
        </div>
    </div>
</header> <br> <br> 

<Section>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mb-2">
                <button class="btn btn-secondary text-right"><em class="fa fa-arrow-left"></em> Back to Dashboard</button>
              
            </div>
            <div class="col-lg-2 mb-2 ">
                <button class="btn btn-success text-right"><em class="fa fa-check"></em> Save changes</button>
            </div>
        </div>
    </div>
</Section> <br><br>

<section id="editor">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <em class="fa fa-pencil" ></em>Edit Setting
                    </div>
                    <div class=" card-body">
                <form>
            
                        <fieldset class="form-group">
                    <div class="form-check">
                            <legend>Allow User Registration</legend>
                        <label for="name">Yes</label>
                        <input type="radio" class="form-check-input" value="yes">
                        
                    </div><br>
                    <div class="form-check">
                    <label for="name">No</label>
                    <input type="radio" class="form-check-input" value="No">
                    
                </div><br>
                </fieldset>

                <fieldset class="form-group">
                    <div class="form-check">
                            <legend>Home Page format</legend>
                        <label for="name">Post index</label>
                        <input type="radio" class="form-check-input" value="yes">
                        
                    </div><br>
                    <div class="form-check">
                    <label for="name">Single page</label>
                    <input type="radio" class="form-check-input" value="No">
                    
                </div><br>
                </fieldset>

                </form>
                    </div>
            </div>
            </div>
        </div>
    </div>

</section>

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