<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
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
                <li class="nav-item"><a class="nav-link text-decoration-none text-light link-dark" href="#about">Dashboard</a></li>
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
                <h1><em class="fa fa-dashboard"></em> Dashboard</h1>
            </div>
        </div>
    </div>
</header> <br> <br> 
<!--# button Post Category and User-->
<section id="add-user">
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="col-lg-3 btn btn-primary"  data-bs-toggle="modal" data-bs-target="#postmodal" type="button"><em class="fa fa-plus"></em> Add Post</button>
                <button class="col-lg-3 btn btn-success" data-bs-toggle="modal" data-bs-target="#catmodal" type="button"><em class="fa fa-plus"></em> Add Category</button>
                <button class="col-lg-3 btn btn-warning" data-bs-toggle="modal" data-bs-target="#usermodal" type="button"><em class="fa fa-plus"></em> Add User</button>
            </div>
        </div>
    </div>
</section> <br><br>

<!-----------------------------------------Post Table----------------------------------------------------->

<section id="tab-car">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 ml">
                <div class="card">
                    <div class="card-header">
                        <h4>Latest Post</h4>
                    </div>
                    <table class="table table-striped" aria-describedby="post table">
                        <thead class="thead-inverse">
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Date Posted</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td >1</td>
                                <td>Post one</td>
                                <td>Web development</td>
                                <td>feb 23, 2022</td>
                                <td><a href="../Assignment/detail.php" class="btn btn-secondary"><em class="fa fa-chevron-right"></em> Detail</a></td>
                            </tr>

                            <tr>
                                <td >2</td>
                                <td>Post two</td>
                                <td>Health</td>
                                <td>feb 15, 2022</td>
                                <td><a href="../Assignment/detail.php" class="btn btn-secondary"><em class="fa fa-chevron-right"></em> Detail</a></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Post three</td>
                                <td>Bussiness</td>
                                <td>feb 10, 2022</td>
                                <td><a href="../Assignment/detail.php" class="btn btn-secondary"><em class="fa fa-chevron-right"></em> Detail</a></td>
                            </tr>
                            <tr>
                                <td >4</td>
                                <td>Post four</td>
                                <td>Web development</td>
                                <td>feb 6, 2022</td>
                                <td><a href="../Assignment/detail.php" class="btn btn-secondary"><em class="fa fa-chevron-right"></em> Detail</a></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Post five</td>
                                <td>Bussiness</td>
                                <td>Jan 23, 2022</td>
                                <td><a href="../Assignment/detail.php" class="btn btn-secondary"><em class="fa fa-chevron-right"></em> Detail</a></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Post six</td>
                                <td>Health</td>
                                <td>Jan 15, 2022</td>
                                <td><a href="../Assignment/detail.php" class="btn btn-secondary"><em class="fa fa-chevron-right"></em> Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--Cards-->
            <div class="col-lg-3">
                <div class="card shadow">
                    <div class="card-body bg-primary">
                        <h4>Posts</h4>
                        <h1 class="display-4">
                            <em class="fa fa-pencil"></em> 6
                        </h1>
                        <a href="../Assignment/post.php" class="btn btn-outline-light">View</a>
                    </div>
                </div> <br>
            <!--Cards-->
           
                <div class="card shadow">
                    <div class="card-body bg-success">
                        <h4>Category</h4>
                        <h1 class="display-4">
                            <em class="fa fa-folder-open"></em> 3
                        </h1>
                        <a href="../Assignment/cat.php" class="btn btn-outline-light">View</a>
                    </div>
                </div> <br> 

                <div class="card shadow">
                    <div class="card-body bg-warning">
                        <h4>Users</h4>
                        <h1 class="display-4">
                            <em class="fa fa-user"></em> 2
                        </h1>
                        <a href="../Assignment/user.php" class="btn btn-outline-light">View</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--Post modal----------------------------------------------------------------------------->
<div class="modal fade" id="postmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light " id="contactmodaltitle">Add Post</h5>
                <button class="close" data-bs-dismiss="modal" aria-label="close"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label for="Category">Select Category</label>
                       <select class="form-control">
                           <option value="Web development">Web development</option>
                           <option value="Bussiness">Bussiness</option>
                           <option value="Health">Health</option>
                       </select>
                    </div><br>
                    <div class="form-group">
                        <label for="file-upload">Upload File</label>
                      <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                      <textarea class="form-control" name="editor1"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>


<!--Category modal----------------------------------------------------------------------------->
<div class="modal fade" id="catmodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-light " id="contactmodaltitle">Add Post</h5>
                <button class="close" data-bs-dismiss="modal" aria-label="close"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" class="form-control">
                    </div><br>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<!----------------------------------User Modal----------------------------------------------------->
<div class="modal fade" id="usermodal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h5 class="modal-title" id="contactmodaltitle">Contact Us</h5>
                <button class="close" data-bs-dismiss="modal" aria-label="close"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                      <textarea class="form-control" placeholder="address"></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

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