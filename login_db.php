<?php
	session_start();
	
	if ( isset ( $_SESSION['views'])){
		$_SESSION ['views'] = $_SESSION ['views'] + 1;
	}else {
		$_SESSION ['views']=1;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>VW Audi World</title>
<link href="../css/login.css" rel="stylesheet" type="text/css">
<link href="../css/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<!-- NAVBAR-->
<nav class="navbar navbar-expand-lg py-3 navbar-light bg-light shadow-sm">
  <div class="container">
    <a href="#" class="navbar-brand">
      <!-- Logo Image -->
       <img src="../images/LogoNav.png" width="90" alt="" class="thumbnail">
      <!-- Logo Text -->
      <span class="text-uppercase font-weight-bold">VW Audi World</span>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../Main.html">Home
                <span class="sr-only">(current)</span>
              </a>
			</li>
	<li class="nav-item">
		<a class="nav-link" href="../Search.html">Shop</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="../blog.html">Blog</a>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="../Login.html">Sign In</a>
	</li>
	</ul>
</div>
</div>
</nav>
</head>

<div class="loginimg">
	<div class="container">
		<div class="login-box">
		<div class ="row">
		<div class ="col-md-6 login-left">
		<center>
		<br><br><br><br><br><br>
			<h2> Login Here </h2>
			<form action="validation_db.php" method="post">
				<div class ="form-group">
					<label> Usename</label>
					<input type ="text" name ="username" class="form-control" required>					
				</div>
				
				<div class ="form-group">
					<label>Password</label>
					<input type ="password" name ="password" class="form-control" required>
				</div>
				
				<button type="submit" class="btn btn-primary"> Login </button>				
					
			</form>

			</center>
		</div>
		
			<div class ="col-md-6 login-right">
			<center>
			<br><br><br><br><br><br>
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
					<div class ="form-group">
						<label> Usename</label>
						<input type ="text" name ="username" class="form-control" required>					
					</div>
					
					<div class ="form-group">
						<label>Password</label>
						<input type ="password" name ="password" class="form-control" required>
					</div>
					
					<button type="submit" class="btn btn-primary"> Register </button>	
										
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</center>
				</form>
			</div>
		
		</div>
		
		
		</div>
		
		</div>
	</div>

	</center>




<div class="footer">
<footer class="page-footer font-small blue pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
   

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->

  <div class="footer-copyright text-center py-3">© 2020 Professional Practice in I.T

    <a href="https://www.youtube.com/channel/UCcna4FrWIQIJLqvsS2Y2Q8w"> Pageviews: <?php echo $_SESSION ['views'];?></a>
  </div>
  <!-- Copyright -->
</div>
</div>
</footer>
</body>
<!-- Footer -->
</html>