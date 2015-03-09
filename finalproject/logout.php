<?php
session_start();
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logout</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <img src="http://oyster.ignimgs.com/wordpress/stg.ign.com/2013/12/dc-universe-online-610crop.jpg" alt="Comic Image" height="150" width="99%">  
</head>
<body>
  <?php
    if ($username && $userid) {
        session_destroy();
        echo "<form id='logout' action='./login.php'> You have been logged out. <input class='submit_button' type='submit' value='Member Login'></form><br>";
    }
    else
        echo "<form id='logout' action='./login.php'> You are not logged in. <input class='submit_button' type='submit' value='Member Login'></form><br>";    
  ?>
  
</body>
</html>