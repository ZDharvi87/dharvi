<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Typography</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <script src="../../../js/bootstrap.min.js"></script>
    <link rel="Stylesheet" href="../../../css/bootstrap.css">
    </head>
    <body>
    <?php include("../../../header.php") ?>
    <div class="row">
      <div class="col-lg-3">
        <?php include("../../sidebar.php") ?>
      </div>
      <div class="col-lg-9 mt-2 text-center" >
        <div class="container">
            <p class="h1">Hello these class h1 in P tag</p>
            <p class="h2">Hello these class h2 in P tag</p>
            <p class="h3">Hello these class h3 in P tag</p>
            <p class="h4">Hello these class h4 in P tag</p>
            <p class="h5">Hello these class h5 in P tag</p>
            <p class="mark">Hello these class h6 in P tag</p>

            <p class="display-1">Hello these class Display 1 in P tag</p>
            <p class="display-2">Hello these class Display 2 in P tag</p>
            <p class="display-3">Hello these class Display 3 in P tag</p>
            <p class="display-4">Hello these class Display 4 in P tag</p>
            <p class="display-5">Hello these class Display 5 P tag</p>
            <p class="display-6">Hello these class Display 6 in P tag</p>

            <blockquote class="blockquote">
                Hello these is blockquote example for learning
            </blockquote>
            <footer class="blockquote-footer">From DZ</footer>

            <!--For multiple line of code we use <pre> Tag -->
                <pre>
                    Hello
                    How are you?
                    fine ? or not ?
                </pre>
        </div>
      </div>
    </div>
    <?php  include("../../../footer.php") ?>
    </body>
    </html>