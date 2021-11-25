<head>
	<?php
		include("includes/head.inc.php");
	?>
</head>

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

	<!-- Navbar brand -->
	<a class="navbar-brand" href="index.php">
	<img src="images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
	BOOKBIRD</a>

	<!-- Collapse button -->
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<!-- Collapsible content -->
	<div class="collapse navbar-collapse" id="basicExampleNav">

		<!-- Links -->
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="aboutus.php">AboutUs</a>
			</li>
		</ul>
		<ul class="navbar-nav ms-auto mb-2 mb-lg-0 active">
			
				<?php
					require('includes/config.php');
						if(isset($_SESSION['status']))
						{
							echo '<li style="margin-right: 10px !important;">
									<a class="nav-link" href="viewcart.php">Cart</a>
									</li>
									<li style="margin-right: 30px !important;">
									<a class="nav-link" href="logout.php">LogOut</a>
									</li>';
						}
						else
						{
							echo '<a class="nav-link" href="register.php">Register</a>';
						}
					?>
		</ul>
		<!-- Links

		<form class="form-inline">
			<div class="md-form my-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			</div>
		</form>
 		-->
	</div>
	<!-- Collapsible content -->

</nav>
<!--/.Navbar-->
  