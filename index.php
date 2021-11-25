
<?php
require('includes/config.php');
 session_start();
	$query="select *from book";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	include("includes/head.inc.php");
?>
<head>
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
				
				<?php
					include("includes/logo.inc.php");
				?>
			<!-- end header -->
			
			<!-- start page -->
 
				<div id="page">
					<!-- start content -->
					<div id="content" style ="float :left; width:75%">
						<div>
							<div class="alert alert-light">
								<h1 Style="padding-top:2%;">
									<?php 
										if(isset($_SESSION['status']))
										{
											echo '
												<p class="H5">Hello' .$_SESSION['unm']. '</p>
												<p class="H4">
												Welcome Back to BookBird
												</p>';
										}
										else
										{	
											echo 'Welcome to BOOKBIRD Store.';
										}
									?>
								</h1>
							</div>
							<div class="entry">
								<br>
								
								<br>		
								<table width="100%" >
									
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
															<div class="card" style="width: 18rem;">
																<a href="detail.php?id='.$row['b_id'].'" class="card-img-top">
																	<img src="'.$row['b_img'].'" width="80" height="100">
																	<div class="card-body">
																		<p class="card-text">'.$row['b_nm'].'
																		</p>
																	</div>
																</a>
															</div>
														</td>';
													$count++;							
													
													if($count==3)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
								</table>
								<object width="100%" height="400">
								</embed>
								</object>
								<br><br>
								
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar" style ="float :Right; width:25%">
					<br>
							<?php
								include("includes/login.inc.php");
								include("includes/search.inc.php");
							?>
							
					</div>
					<!-- end sidebar -->
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

	<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		var i;
		var slides = document.getElementsByClassName("mySlides");
		var dots = document.getElementsByClassName("dot");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}    
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex-1].style.display = "block";  
		dots[slideIndex-1].className += " active";
		setTimeout(showSlides, 2000);
		}
	</script>
</body>
</html>
