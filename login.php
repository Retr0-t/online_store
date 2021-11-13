<?php
session_start();
error_reporting();
if ( isset ($_SESSION["LOGIN"])&& $_SESSION["LOGIN"]==true) {
 header("Location:catalog.php"); 

}
?>
<!DOCTYPE html>

<head>
	<title>CATALOG BARANG</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.js "></script>
</head>
<body class="container">
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  		<a class="navbar-brand" href="#">INDHIRA OPTIC</a>
    	<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
   			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     			 <li class="nav-item ">
        			<a class="nav-link" href="onlinestore.php">BERANDA </a>
      			</li>
     			<li class="nav-item active">
        			<a class="nav-link " href="catalog.php">CATALOG</a>
     		 	</li>
    		</ul>
    		
		</div>
	</nav>
  <div class="row">
    <div class="col-md-12">
      <div style="margin-top: 150px; margin-left: 20%; margin-right: 20% ">
      <h3 class="text-center text-primary"><b>LOGIN</b></h3>
        <form method="post" action="prosses_login.php">
          <label>USERNAME</label>
          <input type="text" name="username"class="form-control" placeholder="MASUKAN USERNAME" required>
          <br>
          <label class="form-label">PASSWORD</label>
          <input type="password" name="password" class="form-control" placeholder="MASUKAN PASSWORD" required>
          <br>
          <input type="submit" name="login" value="SIGN IN" class="btn btn-primary btn-block btn-lg">
        </form>
        <?php 
          if (isset ($_SESSION["ERROR"])) {
          echo $_SESSION["ERROR"];
        }
         

        ?>
      </div>

    </div>
  </div>
  

</body>






</html>

	









