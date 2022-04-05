<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Post</title>
    <link rel="Stylesheet" href="../../../css/bootstrap.min.css"/>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="../../../js/bootstrap.min.js"> </script>
      <style>
          .ml-auto{
              margin-left: auto;
              margin-right: auto;
          }
      </style>
  </head>

  <body>
  <nav class="navbar navbar-expand-sm navbar-light bg-dark position-relative" aria-labelledby="mainnav">
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
                <h1><em class="fa fa-pencil"></em> Post</h1>
            </div>
        </div>
    </div>
</header> <br>
<section id="search">
    <div class="container">
        <div class="row">
            <div class="col-lg-7"></div>
            <div class="col-lg-5">
                <div class="input-group">
                    <input type="text" placeholder="search" class="form-control">
                    <span class="input-group-gtn">
                        <button class="btn btn-primary">Search</button>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section><br>

<!-----------------------------------------Post Table----------------------------------------------------->

<section id="tab-car ml">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ml-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Post</h4>
                    </div>
                    <table class="table table-striped" aria-describedby="post">
                        <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Date Posted</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Post one</td>
                                <td>Web development</td>
                                <td>feb 23, 2022</td>
                               
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Post two</td>
                                <td>Health</td>
                                <td>feb 15, 2022</td>
                              
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Post three</td>
                                <td>Bussiness</td>
                                <td>feb 10, 2022</td>
                               
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Post four</td>
                                <td>Web development</td>
                                <td>feb 6, 2022</td>
                              
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Post five</td>
                                <td>Bussiness</td>
                                <td>Jan 23, 2022</td>
                                
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Post six</td>
                                <td>Health</td>
                                <td>Jan 15, 2022</td>
                              
                            </tr>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </nav>
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