<?php

        require_once "includes/header.php";
        require_once "config/register-config.php";

?>

            <div class="container-fluid" style="background:skyblue; width:800px; height:200px; padding: 15px; color:white;">
                
                    <h1>Welcome, <?php echo $_SESSION['name']; ?></h1>
                    <div class="alert <?php echo $_SESSION['alert-class'];?>">
                        <?php echo $_SESSION['message'] . " You can now Login"; ?>
                        <?php session_unset();?>
                        <h3><a href="login.php" style="font-size:40px; color: red;">Click here to login</a></h3>
                     </div>
            
            </div>



<?php


        require_once "includes/footer.php";
 ?>