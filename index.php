<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <title>MySurgeryMate Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/jumbotron/">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
  </head>
  <body>
	<?php include 'html/navbar.html';?>
<main role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <div class="container">
		<?php include 'html/Homepage.html';?>
    </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="container">
        <h2>Our partnership</h2>
    </div><br>
    <div class="row">
      <div class="col-md-4">
        <p>
        <a href="https://www.ottawahospital.on.ca/" target="_blank">
            <img src="/Joomla/templates/mymate/images/The_Ottawa_Hospital_Logo.jpg" alt="Ottawa Hospital" class="responsive resizeimg center" style="width:150px;height:150px;">
        </a>
        </p>
        <p><a class="btn btn-secondary" href="https://www.ottawahospital.on.ca/" role="button" target="_blank">Visit Ottawa Hospital &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <p>
        <a href="https://www.qch.on.ca/" target="_blank">
            <img src="/Joomla/templates/mymate/images/Queensway-Carleton-Hospital-Logo.png" alt="Queensway Carleton Hospital" class="responsive resizeimg center" style="width:150px;height:150px;">
        </a>
        </p>
        <p><a class="btn btn-secondary" href="https://www.qch.on.ca/" role="button" target="_blank">Visit Queensway Hospital &raquo;</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

<div class="container">
  <?php include 'html/footer.html';?>
</div>

</body>
</html>
