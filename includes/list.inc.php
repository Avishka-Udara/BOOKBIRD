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
                                        <img src="../'.$row['b_img'].'" width="80" height="100">
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