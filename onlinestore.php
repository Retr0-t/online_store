<?php
session_start();
 ?>
<!DOCTYPE html>

<head>
	<title> STORE</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js "></script>
</head>
<body class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" href="onlinestore.php">ONLINE STORE</a>
    	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
   			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     			 <li class="nav-item active">
        			<a class="nav-link" href="onlinestore.php">BERANDA <span class="sr-only">(current)</span></a>
      			</li>
     			<li class="nav-item">
        			<a class="nav-link" href="catalog.php">CATALOG</a>
     		 	</li>
    		</ul>
    		 <form class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

    		</form>
        <?php echo "&nbsp". "&nbsp"; 
        if (isset($_SESSION["LOGIN"])&& $_SESSION["LOGIN"]==true) {
          echo $_SESSION["USERNAME"]; 
          echo "<a href= 'logout.php' type='button' class='btn btn-danger'>LOGOUT</a>";



        } 
           else {
            echo '<a href="login.php" class="btn btn-success">LOGIN</a>';
           }
         ?>

		</div>
	</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/kemeja.jfif" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cewek.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/cowok2.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>
 <div class="row">
 	<div class="col-sm">
 		<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="img/bajuanak.webp" alt="Card image cap">
  			<div class="card-body">
    			<h5 class="card-title">Card title</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    			<a href="#" class="btn btn-primary">Go somewhere</a>
  			</div>

		</div>

 	</div>

 	<div class="col-sm">
 		<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="img/bajuanak1.jpeg" alt="Card image cap">
  			<div class="card-body">
    			<h5 class="card-title">Card title</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    			<a href="#" class="btn btn-primary">Go somewhere</a>
  			</div>

 		</div>
 	</div>
 	<div clas="col-sm">
 		<div class="card" style="width: 18rem;">
  			<img class="card-img-top" src="img/bajuanak2.jfif" alt="Card image cap">
  			<div class="card-body">
    			<h5 class="card-title">Card title</h5>
    			<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    			<a href="#" class="btn btn-primary">Go somewhere</a>
  			</div>

 		</div>





 	</div>
</div>








</body>






</html>

	









