<!--
<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="subcategory.php">Sub_Category</a></li>
			<li><a href="all_book.php">Books</a></li>
			<li class="last"><a href="contact.php">Contact</a></li>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Register</a></li>';
				}
			?>
			
</ul>-->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="category.php">Category</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="all_book.php">Books</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contact.php">Contact</a>
  </li>
  <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
  <?php
			if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
			{
				echo '<li class="nav-item"><a href="../logout.php" class="nav-link"> Logout </a></li>';
			}
			else
			{
				echo '<li class="nav-item"><a href="../register.php" class="nav-link">Register</a></li>';
			}
	?>
</ul>
  </ul>