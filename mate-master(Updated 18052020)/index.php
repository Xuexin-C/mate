<!DOCTYPE html>
<!-- saved from url=(0054)https://getbootstrap.com/docs/4.0/examples/jumbotron/# -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/jumbotron/">
    
    <!-- Custom styles for this template -->
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="./Jumbotron Template for Bootstrap_files/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    

    <!-- Custom styles for this template -->
    <link href="./Jumbotron Template for Bootstrap_files/jumbotron.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
	
    <title>MySurgeryMate Template · Bootstrap</title>
  </head>


<body>

  <!-- Include Navbar -->
  <?php include 'html/navbar.html'; ?>
  

  <!-- Main -->
  <main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <?php include 'html/mymate.html';?>
      </div>
    </div>

    <div class="container">
      <h2>Our partnership</h2>
      
      <br>

      <div class="row">
        <div class="col-md-4">
          <p>
            <a href="https://www.ottawahospital.on.ca/" target="_blank">
                <img src="images/The_Ottawa_Hospital_Logo.jpg" alt="Ottawa Hospital" class="responsive resizeimg center" style="width:150px;height:150px;">
            </a>
          </p>

          <p>
            <a class="btn btn-secondary" href="https://www.ottawahospital.on.ca/" role="button" target="_blank">Visit Ottawa Hospital &raquo;</a>
          </p>
        </div>

        <div class="col-md-4">
          <p>
            <a href="https://www.qch.on.ca/" target="_blank">
                <img src="images/Queensway-Carleton-Hospital-Logo.png" alt="Queensway Carleton Hospital" class="responsive resizeimg center" style="width:150px;height:150px;">
            </a>
          </p>
          <p>
            <a class="btn btn-secondary" href="https://www.qch.on.ca/" role="button" target="_blank">Visit Queensway Hospital &raquo;</a>
          </p>
        </div>
      </div>

      <hr>
    </div> 
    <!-- End container -->
  </main>

  <!-- Load footer -->
  <footer id="myMate" class = "mymatefooter">
    <div>
        <ul>
            <!-- Add font awesome icons -->
            <li><a href="https://facebook.com" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://linkedin.com" target="_blank" title="linkedln"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://instagram.com" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>
    <div class="footercopyright">&copy; 2020. MysurgeryMate</div>
  </footer>

  <!-- Javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <scrip src="js/script.js"></script>
</body>
</html>
