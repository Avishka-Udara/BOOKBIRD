<?php
require('includes/config.php');
 session_start();
	$query="select *from book";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	include("includes/head.inc.php");
?>

<head>
		<?php
			include("includes/head.inc.php");
		?>
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
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content"> 
		<div class="post">
			<h1 class="title">Welcome to Admin interface</h1>
			<?php
			include("../includes/list.inc.php");
			?>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("../includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
