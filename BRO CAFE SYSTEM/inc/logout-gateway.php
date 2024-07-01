<?php
      
                session_start();
                if(isset($_SESSION['usrname']))
                {
                    $_SESSION = array();
                    session_destroy();
                    echo '<script>alert("You have been logout !!");</script>';
                    echo"<meta http-equiv=\"refresh\" content=\"0;URL=../login.php\">";
                    
                }
?>