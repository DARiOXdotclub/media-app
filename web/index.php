<?php

    $latestVersion = file_get_contents('https://storage.googleapis.com/dariox/media-app/latest-version.txt');

    $windows64bitInstaller = 'https://storage.googleapis.com/dariox/media-app/'.$latestVersion.'DARiOX.Media-win32-x64.msi';
    $windows64bitStandalone = 'https://storage.googleapis.com/dariox/media-app/'.$latestVersion.'DARiOX.Media-win32-x64.zip';
    $macStandaloneDownload = 'https://storage.googleapis.com/dariox/media-app/'.$latestVersion.'DARiOX.Media-darwin-x64.zip';

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>DARiOX Media App</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/small-business.css" rel="stylesheet">

  <style>
.py-5.bg-dark{
  position: absolute;
  bottom:0;
  width:100%;
}
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">DARiOX Media</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://media.dariox.club">DARiOX Media</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light">DARiOX Media App</h1>
        <p>The Offical App for the DARiOX Media Service. Download today for the best experience of the DARiOX Media Service!</p>
      </div>
      <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->
    <br><br><br><br><br><h3>Latest Version: <?php echo $latestVersion; ?></h3>
    <!-- Call to Action Well
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
        <p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
      </div>
    </div>-->

    <!-- Content Row -->
    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">No Autoupdator</h2>
            <p class="card-text">Autoupdaters are a lot harder to make than you think, so for the time being you will need to check every now and then for a new update on the App.</p>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Windows Download</h2>
            <p class="card-text">Download the offical installer for the DARiOX Media App</p>
          </div>
          <div class="card-footer">
            <a href="<?php echo $windows64bitInstaller; ?>" class="btn btn-primary btn-sm">Windows Installer (64-bit)</a>
            <a style="margin-top:5px;" href="<?php echo $windows64bitStandalone; ?>" class="btn btn-primary btn-sm">Windows Standalone (64-bit, not recomended)</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Mac Download</h2>
            <p class="card-text">Download the DARiOX Media App for Mac for the best experience!</p>
          </div>
          <div class="card-footer">
            <a href="<?php echo $macStandaloneDownload; ?>" class="btn btn-primary btn-sm">Mac Standalone (10.8 and newer)</a>
          </div>
        </div>
      </div>
      <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; DARiOX Media 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
