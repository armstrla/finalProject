<?php
    session_start();
    include 'connect.php';
    $userid = $_SESSION['userid'];
    $username = $_SESSION['username'];
    ?>
<link rel="stylesheet" type="text/css" href="style.css">    
<div id="entryForm">
<form id='entryform' action='newentry.php' method='POST' enctype='multipart/form-data'>
 <fieldset>   
     <tr>
       <td>Enter the name of series or character:<br> </td>
       <?php
       echo "<input type='hidden' name='user' value='$username'>"
       ?>
        <td><input type='text' name='name'/><br></td>
        <td>
        <label>Description of Media Form:</label>
          <select name="description">
            <option value="TV Show">TV Show</option>
            <option value="Movie">Movie</option>
            <option value="Game">Game</option>
            <option value="Comic">Comic</option>
            <option value="-">Other</option>
          </select>
          </td><br>
        <td> 
        <h4>Write your series or character review here.</h4>Enter up to 1000 Characters.
          <textarea name="dotell" rows="7" cols="80">
            Write your review here.
          </textarea>
        </td>  
         <br><br>
        <td>If you wish, you may upload a picture of the character or series here. (up to 1 mb).</td>
         <br>
        <td><input type='file' name="fileToUpload" id="fileToUpload"></td> <br>
        <td></td>       
          <form>
          <td><br></td>
          <td>Would you like this to be visible to other members?
            <input type="radio" name="share" value="1" value="red" checked />Yes
            <input type="radio" name="share" value="0" />No<br>
         </td>
          </form>
       <input class='submit_button' type='submit' value="Upload Your Entry." name='submit'>
      </tr>
  </fieldset>      
</form>
</div>    