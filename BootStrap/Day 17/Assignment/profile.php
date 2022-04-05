<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
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
                <h1><em class="fa fa-user"></em>Edit Profile</h1>
            </div>
        </div>
    </div>
</header> <br> <br> 

<Section>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <button class="btn btn-secondary text-right"><em class="fa fa-arrow-left"></em> Back to Dashboard</button>
              
            </div>
            <div class="col-lg-4">
                <button class="btn btn-success text-right" data-bs-target="#pass" data-bs-toggle="modal"><em class="fa fa-lock"></em> Change Password</button>
                <button class="btn btn-danger float-end"><em class="fa fa-remove"></em> Delete Profile</button>
            </div>
        </div>
    </div>
</Section> <br><br>

<section id="editor">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <em class="fa fa-pencil" ></em>Edit post
                    </div>
                    <div class=" card-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="name">
                    </div><br>
                    <div class="form-group">
                        <label for="email">Email</label>
                      <input type="Email" class="form-control" placeholder="dz@gmail.com">
                    </div> <br>
                    <div class="form-group">
                        <label for="Blogs">Blogs</label>
                      <textarea class="form-control" placeholder="Blogs"></textarea>
                    </div> <br>

                    <div class="form-group">
                        <button class="btn btn-primary" type="button" >Submit</button>
                    </div>

                </form>
                    </div>
                    
            </div>
            </div>
            <div class="col-lg-3 float-end mt-0">
                <h3>Your profile</h3>
                <img src="download.jpg" alt="" height="200" width="200">
                    <button class="btn btn-success text-right mt-2" style="width: 80%;" ><em class="fa fa-pencil"></em> Edit Image</button><br>
                    <button class="btn btn-danger mt-2 " style="width: 80%;"><em class="fa fa-remove"></em> Delete Image</button>
            </div>
        </div>
    </div>

</section>

<!--Password-->
<div class="modal fade" id="pass">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light " id="contactmodaltitle">Add Post</h5>
                <button class="close" data-bs-dismiss="modal" aria-label="close"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="Email" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label for="name">Current password</label>
                        <input type="password" class="form-control">
                    </div><br>
                    <div class="form-group">
                        <label for="name">New password</label>
                        <input type="password" class="form-control">
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