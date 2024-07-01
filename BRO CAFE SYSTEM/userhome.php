<?php
require 'inc/dbcon.php';
session_start();
if(isset($_SESSION['usrname']))
{
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bro's - Home</title>
    </head>
    <body>
        <h1>Website otw... (user)</h1>
        <a href="inc/logout-gateway.php">Logout</a>
    </body>
    </html>

<?php
$conn->close();
}
else{
   $_SESSION = array();
     session_destroy();
   echo"<meta http-equiv=\"refresh\" content=\"0;URL= login.php\">";

}

?>