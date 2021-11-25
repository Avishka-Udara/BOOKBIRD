<ul class="list-group">


			<li id="search"  class="list-unstyled input-group">
				<h2 class="list-group-item list-group-item-action active">Search</h2>
				<form method="GET" action="search_result.php" style="width: 100%;">
					<input type="text" class="navbar-form" id="s" name="s" value="" style="width: 100% !important;"/>
					<div class="d-grid gap-2">
						<br>
						<input type="submit" class="btn btn-secondary" id="x" value="Search"/>
					</div>
				</form>
			</li>
						
			<li id="catogary" class="list-group-item list-group-item-action active">
				<h2>Categories</h2>
			</li>
			<li class="list-unstyled" >
									
				<div>
						<?php
								$query="select * from category ";
	
								$res=mysqli_query($conn,$query);
									
								while($row=mysqli_fetch_assoc($res))
									{
										echo '<li  class="list-unstyled"><a class="list-group-item list-group-item-action" href="subcat.php?cat='.$row['cat_id'].'&catnm='.$row["cat_nm"].'">'.$row["cat_nm"].'</a></li>';
									}
	
									mysqli_close($conn);
						?>
				</div>
			</li>	
</ul>
