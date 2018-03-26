<?php
// output buffering so redirect works. otherwise might get headers already sent error
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>John S. Bissonette | CSC 261 | Quiz 8</title>
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
  <link rel="manifest" href="img/favicon/manifest.json">
  <link rel="shortcut icon" href="img/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#663fb5">
  <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
  <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
  <link rel="stylesheet" href="css/landio.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="bg-faded">
  <nav class="navbar navbar-dark bg-inverse">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <span class="icon-logo"></span>
        <span class="sr-only">John S. Bissonette</span>
      </a>
      <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbarInverse" aria-expanded="false"
        aria-controls="collapsingNavbarInverse">
        &#9776;
      </a>
      <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUserInverse"
        aria-expanded="false" aria-controls="collapsingMobileUserInverse">
        <span class="icon-user"></span>
      </a>
      <div id="collapsingNavbarInverse" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbarInverse">
        <ul class="nav navbar-nav pull-xs-right">
          <li class="nav-item dropdown hidden-sm-down">
            <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenuInverse2" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img src="img/wardog.jpg" height="40" width="40" alt="Avatar" class="img-circle">
              <span class="icon-caret-down"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenuInverse2">
              <div class="media">
                <div class="media-left">
                  <img src="img/wardog.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                </div>
                <div class="media-body media-middle">
                  <h5 class="media-heading">John S. Bissonette</h5>
                  <h6>jbisson2@u.rochester.edu</h6>
                </div>
              </div>
              <a href="https://www.linkedin.com/in/john-bissonette/" class="dropdown-item text-uppercase">LinkedIn</a>
              <a href="https://github.com/jsbUSMC" class="dropdown-item text-uppercase">GitHub</a>
            </div>
          </li>
        </ul>
      </div>
      <div id="collapsingMobileUserInverse" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel"
        aria-labelledby="collapsingMobileUserInverse">
        <div class="media m-t-1">
          <div class="media-left">
            <img src="img/wardog.jpg" height="60" width="60" alt="Avatar" class="img-circle">
          </div>
          <div class="media-body media-middle">
            <h5 class="media-heading">John S. Bissonette</h5>
            <h6>jbisson2@u.rochester.edu</h6>
          </div>
        </div>
        <a href="https://www.linkedin.com/in/john-bissonette/" class="dropdown-item text-uppercase">LinkedIn</a>
        <a href="https://github.com/jsbUSMC" class="dropdown-item text-uppercase">GitHub</a>
      </div>
    </div>
  </nav>
  <hr class="invisible">
  <div class="container">
    <div class="row">
      <div class="col-md-6" style="margin-left: 25%;">

        <?php
          require_once("../db_setup.php");
          $db -> "USE jbisson2_1;";
          if ($conn->query($db) === FALSE) {
            header("Location:bad_conn.php")
          }

          $findUserQuery = "SELECT * FROM User WHERE UserID = "
        ?>

      </div>
    </div>
  </div>
  <footer class="section-footer bg-inverse" style="position: absolute; bottom: 0; width: 100%;" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-5">
          <div class="media">
            <div class="media-left">
              <span class="media-object icon-logo display-1"></span>
            </div>
            <small class="media-body media-bottom">
              &copy; John S. Bissonette 2018.
              <br> Developed for CSC 261: Database Systems at the
              <a href="https://rochester.edu" class="nav-link has-gradient">University of Rochester</a>
            </small>
          </div>
        </div>
        <div class="col-md-6 col-lg-7">
        </div>
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="js/landio.min.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>