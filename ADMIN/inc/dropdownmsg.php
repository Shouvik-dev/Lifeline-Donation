<?php 
include("db.php") 

?>
<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                        <?php
                                $sql = "SELECT * FROM messages";
                                $rs= $con->query($sql);

                                if ($rs->num_rows > 0) {
                                while($row = $rs->fetch_assoc()){
                        ?>
                                 <a class="dropdown-item d-flex align-items-center" href="queries.php">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"> <?php echo $row['message']; ?> </div>
                                        <div class="small text-gray-500"><?php echo $row['Name']; ?></div>
                                    </div>
                                </a> 
                                <?php }} else {?>  
                                    <a class="dropdown-item text-center small text-gray-500" href="queries.php">No Messages</a>
                                    
                                    <?php } ?>
                                    <a class="dropdown-item text-center small text-gray-500" href="queries.php">Read More Messages</a>

 </div>