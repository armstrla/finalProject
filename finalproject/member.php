<?php
session_start();
include 'connect.php';
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$target_dir = "./upload/"; 
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="ajax_script.js"></script>
<title>User Page</title>
<img src="http://oyster.ignimgs.com/wordpress/stg.ign.com/2013/10/Batman_102813_1600.jpg" alt="Batman" height="150" width="99%"> 
</head>
<body>
<h2>Welcome to the Superhero and Villain Review Base.</h2>
<?php
    if ($username && $userid)
    {
    echo "<form id='memberlogout' action='./logout.php'> Welcome <b>$username</b> <input class='submit_button' type='submit' value='Logout'/></form><br>";  
    ?>  
    <div id='mainDiv'>
    <h3 class='makeentry'> Create New Review. <button id='makeentry' type="button" onclick="myFunction('entry.php','mainDiv')">Click Here</button></h3>  
    
    <?php    
        echo '<table class="displaytable">';
        echo '<h3 class="maintitle" >Superhero and Villain Review Base - Tell us about a series or character then vote for your favorite</h3>';
        echo '<tr class="dt" ><th>Name of Character or Series</th><th class="dt">Description</th><th  class="dt" colspan="3" >Votes / Vote</th><th  class="dt" >Picture</th></tr>';
        $query = $mysqli->query("SELECT * FROM users WHERE (user='$username') OR (share=1) ");
           while($row = $query->fetch_assoc() )
           {
 
           echo '<tr  class="dt">';
           echo '<td  class="dt">'.$row ["name"].'</td>';
           echo '<td  class="dt">'.$row ["description"].'</td>';
           $id = $row["id"];
           echo '<td  class="dt">'.$row ['votes'].'</td>';
           ?>
           <td  class="dt"><form id='up' action="
           <?php $mysqli->query("UPDATE users SET votes=(votes +1) WHERE id='$id' LIMIT 1 "); ?>
           "><input type='submit' value='▲'>
           </form></td>
               
           <td  class="dt" > <form id='down' action="
           
           "><input type='submit' value='▼'></form> </td>
           
           <td><img src="<?php echo $target_dir.$row["pict"];?>" border="1" height="70" width="90"></td>
           <?php
           echo '</tr>';
           echo '<td  class="dt"><b><pre>  Tell Us About It -> </b></td>';
           echo '<td  class="dt" colspan="5">'.$row ["dotell"].'</td>';
           }
       echo "</table>";
       ?>
</div>
       <?php
     
         
    }
    else
    {
        echo "<form id='memberL' action='./login.php'>Please login to access this page. <input class='submit_button' type='submit' value='login'/></form><br>";       
        echo "<form id='memberR' action='./register.php'>If your not a member, why not register? ";
        echo "<input class='submit_button' type='submit' value='Register'></form><br> ";
   }        
    ?>


  
</body>
</html>