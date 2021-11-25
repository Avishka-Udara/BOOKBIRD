<ul class="list-group"> 
<li id="login" class="list-unstyled input-group">
				
                <?php
                require('includes/config.php');
                    if(isset($_SESSION['status']))
                    {
                        echo '';
                    }
                    else
                    {
                        echo '<form action="process_login.php" method="POST" style="width: 100%;">
                                <h2 class="list-group-item list-group-item-action active">LogIn</h2>
                                    <b>Username:</b>
                                    <br><input type="text" name="usernm" id="s" class="navbar-form pull-left style="width: 100% !important;"">
                                    <br>                                                                      
                                    <b>Password:</b>
                                    <br><input type="password" name="pwd" id="s" class="navbar-form pull-left style="width: 100% !important;"">
                                    <div class="d-grid gap-2">
                                    <br>
                                        <input type="submit" id="x" value="Login" class="btn btn-secondary style="width: 100% !important;""/>
                                    </div>
                                </form>';
                    }
                ?>
    </li>
</ul>
<!--
echo '<h2>Hello :  '.$_SESSION['unm'].'</h2>';
--->