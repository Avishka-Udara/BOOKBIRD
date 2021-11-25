<?php session_start();
require('includes/config.php');
?>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
</head>

<body>
			<!-- start header -->
					<div id="header">
						<div id="menu">
							<?php
								include("includes/menu.inc.php");
							?>
						</div>
					</div>
					

			<!-- end header -->
			
			<!-- start page -->

					<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="container py-4 w-50">
									<h1 class="title">Contact us</h1>
									<form action="process_contact.php" method="POST">
												
										<div class="mb-3">
											<label for="InputEmail1" class="form-label">Name</label>
											<input type='text' name='nm' size=35 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
										<div class="mb-3">
											<label for="InputEmail1" class="form-label">Email Address</label>
											<input type='text' name='email' size=35 class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
											<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
										</div>
										<div class="mb-3">
											<span class="form-label">Query</span>
											<textarea class="form-control" cols="40" rows="10" name='query'></textarea>
										</div>
										<div class="d-grid">
										<button type="submit" class="btn btn-primary btn-lg" name='btn' value='   OK   '>Submit</button>											
										</div>
									</form>
									
								</div>
								
							</div>
						<!-- end content -->						
						<div style="clear: both;">&nbsp;</div>
					</div>
			<!-- end page -->
						
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
