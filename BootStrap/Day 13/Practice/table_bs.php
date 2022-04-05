<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Table Typography</title>
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
        <div class="table-responsive-sm container" >
            <table class=" table table-dark table striped text-center">
                <caption>Practice on Table with bootstrap</caption>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                </tr>
                <tr class="table-primary">
                    <td>
                        Dharvi
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
                <tr class="table-secondary">
                    <td>
                        Om
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
                <tr class="table-warning">
                    <td>
                        Jiya
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
            </table>


            <h4>Basic Table</h4>
            <table class=" table text-center">
                <caption>Practice on Table with bootstrap</caption>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                </tr>
                <tr>
                    <td>
                        Dharvi
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
                <tr>
                    <td>
                        Om
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
                <tr>
                    <td>
                        Jiya
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
            </table>

            <h4>Table without border</h4>
            <table class="table table-borderless table-dark text-center">
                <caption>Practice on Table with bootstrap</caption>
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                </tr>
                <tr class="table-warning">
                    <td>
                        Dharvi
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
                <tr class="table-light">
                    <td>
                        Om
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
                <tr class="table-info">
                    <td>
                        Jiya
                    </td>
                    <td>
                        Zanzrukia
                    </td>
                </tr>
            </table>
        </div>
</div>
    </div>
    <?php include("../../../footer.php") ?>
    </body>
</html>