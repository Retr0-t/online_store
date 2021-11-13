<?php 
session_start();
error_reporting();
if (!isset($_SESSION["LOGIN"])&&$_SESSION["LOGIN"]== false) {
  header("location:login.php");
}
?>
<!DOCTYPE html>

<head>
	<title>catalog </title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js "></script>
</head>
<body class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" href="#">ONLINE STORE</a>
    	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
   			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     			 <li class="nav-item ">
        			<a class="nav-link" href="onlinestore.php">BERANDA </a>
      			</li>
     			<li class="nav-item active">
        			<a class="nav-link " href="catalog.php">CATALOG</a>
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
  <div class="row">
    <div class="col-md-2">
        PENGIRIMAN
        <br>
        <input type="checkbox" name="PENGIRIMAN" value="JNE"/> JNE
        <br>
        <input type="checkbox" name="PENGIRIMAN" Value="JNT"/> JNT
        <br>
        <input type="checkbox" name="PENGIRIMAN" value="sicepat"/> SICEPAT
        <br>

    </div>
    <div class="col-md-10">
      <div class="row">
  <div class="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Baju anak</h5>
          <p class="card-text">Rp 150.000.</p>
          <a href="#" class="btn btn-primary">BELI SEKARANG</a>
        </div>

    </div>

  </div>

  <div class="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajumuslim1.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>
  </div>
  <div clas="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak2.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Baju Muslim Anak</h5>
          <p class="card-text">Rp 200.000</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>





  </div>
</div>
<br>
<br>
<br>
<div class="row">
  <div class="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>

  </div>

  <div class="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak1.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>
  </div>
  <div clas="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak2.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>





  </div>
</div>
<br>
<br>
<br>
<div class="row">
  <div class="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak.webp" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>

  </div>

  <div class="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak1.jpeg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>
  </div>
  <div clas="col-sm">
    <div class="card" style="width: 15rem;">
        <img class="card-img-top" src="img/bajuanak2.jfif" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>

    </div>





  </div>
</div>



    </div>
  </div>
  
	









</body>






</html>

	









